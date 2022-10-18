<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//fonction de nettoyage de data
function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

//verification & envoi mail si ok
if (
    //on a une reponse du captcha => pas d'envoi depuis un robot script
    //isset($_POST['recaptchaResponse']) && !empty($_POST['recaptchaResponse']) &&
    //le nom est renseigné
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    //le mail est renseigné, valide et propre
    isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) &&
    //le nom est renseigné
    isset($_POST['message']) && !empty($_POST['message'])
) {

    try {

        //on nettoie les données du formulaire par précaution
        $nom = valid_donnees($_POST['nom']);
        $email = valid_donnees($_POST['email']);
        $message = valid_donnees($_POST['message']);

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
//                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'localhost';                     //Set the SMTP server to send through
        $mail->SMTPAuth = false;                                   //Enable SMTP authentication
        $mail->Port = 1025;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('jaiparcouru@lechemin.kyo', 'me sender');
        $mail->addAddress('bobe@email.extension', 'Bob user');     //Add a recipient

        //Attachments
        $mail->addAttachment('C:\Users\DELL002\Desktop\ramonetout.jpg');         //Add attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Contact de la part de $nom - $email";
        $mail->Body = 'This is the HTML message body <b>in bold!</b>' . $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients' . $message;

        $mail->send();

        echo 'Message has been sent';
//                header('location:contact.html?res=ok');

    } catch (Exception $e) {
        //redirection vers form en erreur
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        http_response_code(500);    //erreur d'envoi du mail
//            header('location:contact.html?res=ko');
    }
}

/*
    //captcha
    //on prepare l'url de vérification
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret=your-private-keyW&response={$_POST['recaptchaResponse']}";

    //on créer une instance de curl
    $curl = curl_init($verifyUrl);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    $responseJSON = curl_exec($curl);

    //si on a pas de reponse alors on redirige
    if (is_null($responseJSON) || empty($responseJSON)) {
        header('location:contact.html?res=ko');
    } else {
        try {
            $response = json_decode($responseJSON);
            //si la réponse est un succès => on envoi le mail
            if ($response->success) {

                //on nettoie les données du formulaire par précaution
                $nom = valid_donnees($_POST['nom']);
                $email = valid_donnees($_POST['email']);
                $message = valid_donnees($_POST['message']);

                //Load Composer's autoloader
                require 'vendor/autoload.php';

                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                //Server settings
//                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                //$mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->Host       = 'localhost';                     //Set the SMTP server to send through
                // $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
                 //$mail->Username   = 'user@example.com';                     //SMTP username
                 //$mail->Password   = 'secret';                               //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port = 1025;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('alice@domain.ext', 'me sender');
                $mail->addAddress('bobe@email.extension', 'Bob user');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "Contact de la part de $nom - $email";
                $mail->Body = 'This is the HTML message body <b>in bold!</b>' . $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients' . $message;

                $mail->send();

                echo 'Message has been sent';
//                header('location:contact.html?res=ok');
            }
        } catch (Exception $e) {
            //redirection vers form en erreur
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            http_response_code(500);    //erreur d'envoi du mail
//            header('location:contact.html?res=ko');
        }
    }
} else {
    http_response_code(403);    //accès interdit => donnée non conforme
//    header('location:contact.html?res=ko');
}
*/

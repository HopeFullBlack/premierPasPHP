<?php

// /home/pierre/dev/php/PremiersPasPHP/exos
$fileToUpload = $_FILES["imgToUpload"];
$target_file = __DIR__. '/../uploads/'. basename($fileToUpload["name"]);
$uploadOk = true;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($fileToUpload["tmp_name"]);
    if($check !== false) {
        echo "le fichier a du contenu - " . $check["mime"] . ".";
    } else {
        echo "le fichier est vide";
        $uploadOk = false;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "désolé, ce fichier existe deja sur le serveur.";
    $uploadOk = false;
}

// Check file size
if ($fileToUpload["size"] > 500000) {
    echo "Désolé, le fichier dépasse la taille maximale autorisé";
    $uploadOk = false;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "svg" ) {
    echo "Sorry, only JPG, JPEG, PNG, GIF & SVG files are allowed.";
    $uploadOk = false;
}

// Check if $uploadOk is set to 0 by an error
if (!$uploadOk) {
    echo "Le fichier ne respecte les conditions d'upload";
// if everything is ok, try to upload file
} else {
    //je déplace mon fichier du dossier temporaire vers son dossier définitif
    if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
        //succès
        echo "The file ". htmlspecialchars( basename( $fileToUpload["name"])). " has been uploaded.";
    } else {
        //erreur
        echo "Erreur : le déplacement du fichier est impossible";
    }
}
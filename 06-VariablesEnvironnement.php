<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 13:16
 */
$maVariable1 = 10;
$maVariable2 = "Toto";

require_once 'vendor/autoload.php';

//echo var_dump(get_defined_vars());

dump($_SERVER);

echo"<pre>";
var_dump($_SERVER);
echo'</pre>';

echo getenv("SERVER_PORT");

echo "<br> {$_SERVER['SERVER_PORT']}";

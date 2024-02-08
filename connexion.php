<?php
try {
    //code...
    $basetest=new PDO("mysql:host=localhost;dbname=basetest;port=3308;charset=UTF8;","root","");
// $baseamis=new PDO("mysql:host=localhost;dbname=baseamis;port=3308","root","");
echo("<p style=\"color: green;\">Connexion à la base de données faite avec succées</p>");
} catch (Exception $expt) {
    die("<p style=\"color: red;\">Echec de connexion à la base de données</p>".$expt->getMessage());
}

?>

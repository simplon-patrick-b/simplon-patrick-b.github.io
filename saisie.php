<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', 'simplon');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

$req = $bdd->prepare('INSERT INTO simploniens(nom, prenom, mail, tel, date, societe) VALUES(:nom, :prenom, :mail, :tel, :date, :societe)');

$req->execute(array(

    'nom' => $_POST['nom'],

    'prenom' => $_POST['prenom'],

    'mail' => $_POST['mail'],

    'tel' => $_POST['tel'],

    'date' => $_POST['date'],

    'societe' => $_POST['societe']

    ));


echo 'Vos informations ont bien &eacute;t&eacute; enregistr&eacute;es';

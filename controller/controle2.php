<?php

//  Connexion à la base de données
$pdo = new PDO
(
    'mysql:host=localhost;dbname=Hopital1;charset=UTF8',
    'root',
    'papepol1',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
//preparation de la requett


?>
<?php


//modification 




//  Connexion à la base de données
$pdo = new PDO
(
    'mysql:host=localhost;dbname=Hopital1;charset=UTF8',
    'root',
    'papepol1',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);


//Ajout des informations dans la table


$newInscrits = 'INSERT INTO Inscrits (Nom_inscrit,prenom_inscrit,Domaine,Statut,Mot_pass,Logine)
VALUES (?,?,?,?,?,?)';

$query = $pdo->prepare($newInscrits);
$query->execute(array($_POST['Nom_inscrit'],$_POST['prenom_inscrit'],$_POST['Domaine'],
$_POST['Statut'],$_POST['Mot_pass'],$_POST['Logine']));

$Inscrits = $pdo->lastInsertId();





?>


<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">

    
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>document</title>
</head>
<body>
<h1>Insertion reuissi</h1>
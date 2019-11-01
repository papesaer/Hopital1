<?php
session_start();
?>
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
<h1> <img src="../assets/image/CONS.jpeg" style="float:left;"></h1>




<!DOCTYPE>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymou">

    <title>Hello, world!</title>
  </head>
<body class="bg-info">




  

  
  
  
  







  <div class="container">
  <div class="card">
  <div>
  <?php
  $Domaine=$_POST['Domaine'];
  ?>
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
                            <h1 style="color:red;">GESTION DES RDV</h1><br>
                            <p>Bonjour</p>
                            <p>BIENVENNUE DANS LE SERVICE Mr/Md</p>
                            
                              
                                <form action = "verif-form.php" method = "get" style=" position: relative;left:550px;top:-40px;">
                               
                               


                                  <INPUT TYPE="button"  Value="Voir agenda" onclick="window.location='../view/pape.php';" 
                                  style=" left:30px;top:-1px;">
                                  
                                </form>
                            
                                </div>
                            <div class="card-header">
                            </div>
 

          <div class="card-body">
<div class="row justify-content-center">
  <div class="form-style-3">


  <p>Toute l’équipe de l'hopital  vous souhaite la bienvenueet vous 
  remercie de l’accueil que vous lui réservez.

Vous y trouverez dans le premier temps un catalogue avec tous les articles destinés à nos programmes
toute la gamme des coloris de tissus
un catalogue d’actions.
Vous avez la possibilité de contacter avec le Secretaire.  Avec un simple clic vous lui envoyer un tableau 
d'indisponibilite pour vos absence dans les prochains jour_indispo que tu exécutera dans les meilleurs délais.
N'hésitez pas a soumettre votre absence svp!!!!.</p>
 
 
    </div>
    </div>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 </html>  
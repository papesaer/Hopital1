<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="cours.css">
<title>Untitled Document</title>
</head>
 
<body>
<?php
  require_once 'heder.php';
  ?>
<TABLE BORDER="1">
  <CAPTION> liste des news employee dans l hopital </CAPTION>
  <tr>
 <th> Nom </th>
 <th> prenom </th>
 <th> Domaine </th>
 <th> logine </th>
 <th> Statut </th>
 <th> Mot pass </th>
 
  </tr>
  
 <?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=Hopital1', 'root', 'papepol1', $pdo_options);
     
     
    // On recupere tout le contenu de la table news
$reponse = $bdd->query('SELECT Nom_inscrit, prenom_inscrit, Statut, Domaine, Mot_pass, Logine FROM Inscrits');
  
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[Nom_inscrit] </td>";
    echo "<td> $donnees[prenom_inscrit] </td>";
    echo "<td> $donnees[Logine] </td>";
    echo "<td> $donnees[Mot_pass] </td>";
    echo "<td> $donnees[Statut] </td>";
    echo "<td> $donnees[Domaine] </td>";
    
    
    echo "</tr>";
 
     
}
$reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



?>
   
</table>
</body>
</html>
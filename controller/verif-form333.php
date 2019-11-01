<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=Hopital1", "root", "papepol1");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme)){
  $terme = strtolower($terme);
  
  $select_terme = $bdd->prepare("SELECT Tel_patient, Date_RDV,Nom_Patient,Prenom_patient,
  Adress_patient,Tel_patient,Heured_RDV,Heuref_RDV,Nom_RDV,
  Domaine,Nom_inscrit,prenom_inscrit FROM V_RDV_Patients_Inscrits  where Nom_Patient='sal' ");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%",
   "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%"));
 }
 else
 {
   $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="cours.css">
<title>Untitled Document</title>
</head>
 
<body>
<?php
  require_once '../view/header1.php';
  ?>
<TABLE BORDER="1">
  <CAPTION> liste des RDV</CAPTION>
  <tr>
                                        <th>Nom patient</th>
                                       
                                       <th>Prenom Patient</th>
                                       
                                       <th>Adress patient</th>
                                       
                                       <th>Tel patient </th>

                                       <th>Date RDV</th>
                                       
                                       <th>Heure debut RDV</th>

                                       <th>Heure fin RDV</th>

                                       <th>Nom RDV </th>

                                       <th>Spetialisation</th>

                                       <th>Nom Docteur</th>

                                       <th>Prenom Docteur </th>

 
  </tr>
  
 <?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=Hopital1', 'root', 'papepol1', $pdo_options);
     
     
    // On recupere tout le contenu de la table news
    $select_terme = $bdd->query("SELECT Tel_patient, Date_RDV,Nom_Patient,Prenom_patient,
    Adress_patient,Tel_patient,Heured_RDV,Heuref_RDV,Nom_RDV,
    Domaine,Nom_inscrit,prenom_inscrit FROM V_RDV_Patients_Inscrits  where Nom_Patient LIKE
    '%$terme%' OR Prenom_patient LIKE '%$terme%' OR Tel_patient = '$terme' OR Date_RDV LIKE '%$terme%'  ORDER BY id DESC");
  
// On affiche le resultat
while($terme_trouve = $select_terme->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $terme_trouve[Nom_Patient] </td>";
    echo "<td> $terme_trouve[Prenom_patient] </td>";
    echo "<td> $terme_trouve[Adress_patient] </td>";
    echo "<td> $terme_trouve[Tel_patient] </td>";
    echo "<td> $terme_trouve[Date_RDV] </td>";
    echo "<td> $terme_trouve[Heured_RDV] </td>";
    echo "<td> $terme_trouve[Heuref_RDV] </td>";
    echo "<td> $terme_trouve[Nom_RDV] </td>";
    echo "<td> $terme_trouve[Domaine] </td>";
     echo "<td> $terme_trouve[Nom_inscrit] </td>";
    echo "<td> $terme_trouve[prenom_inscrit] </td>";
    
    
    
    echo "</tr>";
 
     
}
$select_terme->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



?>
   
</table>
</body>
</html>
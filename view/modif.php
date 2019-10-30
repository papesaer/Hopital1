
  
<?php
 //  Connexion à la base de données
 $objetPdo = new PDO('mysql:host=localhost;dbname=Hopital1','root', 'papepol1');
 //preparation de la requette
$id=$_POST['id'];

 
 $pdoStat = $objetPdo->prepare('UPDATE V_RDV_Patients_Inscrits set Nom_Patient=:Nom_Patient, Prenom_patient=:Prenom_patient,
  Tel_patient=:Tel_patient, Adress_patient=:Adress_patient, Nom_inscrit=:Nom_inscrit, prenom_inscrit=:prenom_inscrit,
  Domaine=:Domaine, Date_RDV=:Date_RDV, Heured_RDV=:Heured_RDV, Heuref_RDV=:Heuref_RDV, Nom_RDV=:Nom_RDV where id=:id LIMIT 1');
 

 
 //liaison avec les parrametre nommer


 
 $pdoStat->bindValue(':id',$_POST['id'], PDO::PARAM_STR);

 //liaison des parrametre nome
 $pdoStat->bindValue(':Nom_Patient',$_POST['Nom_Patient'], PDO::PARAM_STR);
$pdoStat->bindValue(':Prenom_patient',$_POST['Prenom_patient'], PDO::PARAM_STR);
$pdoStat->bindValue(':Tel_patient',$_POST['Tel_patient'], PDO::PARAM_STR);
$pdoStat->bindValue(':Adress_patient',$_POST['Adress_patient'], PDO::PARAM_STR);
$pdoStat->bindValue(':Nom_inscrit',$_POST['Nom_inscrit'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom_inscrit',$_POST['prenom_inscrit'], PDO::PARAM_STR);
$pdoStat->bindValue(':Domaine',$_POST['Domaine'], PDO::PARAM_STR);
$pdoStat->bindValue(':Nom_inscrit',$_POST['Nom_inscrit'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom_inscrit',$_POST['prenom_inscrit'], PDO::PARAM_STR);
$pdoStat->bindValue(':Date_RDV',$_POST['Date_RDV'], PDO::PARAM_STR);
$pdoStat->bindValue(':Heured_RDV',$_POST['Heured_RDV'], PDO::PARAM_STR);
$pdoStat->bindValue(':Heuref_RDV',$_POST['Heuref_RDV'], PDO::PARAM_STR);
$pdoStat->bindValue(':Nom_RDV',$_POST['Nom_RDV'], PDO::PARAM_STR);
  

//execution de la requett



$insertIsOk = $pdoStat->execute();
var_dump($insertIsOk);

   if($insertIsOk){
       $message = 'la modification enregistrer ala base de donee';
       }
    else{
        $message= 'Echec de modification';
    }

  

?>

<!doctype html>

<head>
    <meta charset="UTF-8">
   
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>
<body>
   <h1>modification reuissi</h1>
   <p><?php echo $message?></p>
</body>
</html>
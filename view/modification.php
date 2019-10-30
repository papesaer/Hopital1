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
$id=$_GET['id'];




$sql="SELECT * FROM V_RDV_Patients_Inscrits WHERE id=".$id;
$query = $pdo->prepare($sql);
$query->execute();
$V_RDV_Patients_Inscrits = $query->fetchAll(PDO::FETCH_OBJ);



foreach($V_RDV_Patients_Inscrits  as $RDV){
  var_dump($RDV->id);
  echo $RDV->id;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <?php
  require_once 'heder.php';
  ?><br><br><br><br><br><br><br><br>
<body class="bg-info">

  
  
  
                    <h1><CAPTION>tous les rdv a modifier</CAPTION></h1>

 
 
  
  







 

 <form method="POST" action="modif.php"> 
  
 <fieldset><legend>Le patient doit etre enregistrer
     <div class="form-groupe">
     <table>
     <tr>
     <td>
  <label>ID
  <input type="text" name="id" class="form-control"  placeholder="nom patient" value="<?= $RDV->id; ?>">
  
  </div>
  <div class="form-groupe">
     <table>
     <tr>
     <td>
  <label>Nom patient
  <input type="text" name="Nom_Patient" class="form-control"  placeholder="nom patient" value="<?= $RDV->Nom_Patient; ?>">
  
  </div>
  </td>
  <td>
  <div class="form-groupe">
  </label>
  <label>PRENOM patient
  <input type="text"  name="Prenom_patient" class="form-control"  placeholder="prenom" value="<?= $RDV->Prenom_patient; ?>" >
  </label>
  </div>
  </td>
  </tr>
  <tr>
  <td>
  <div class="form-groupe">
  <label>TELEPHONE patient
  <input type="telephone" name="Tel_patient" class="form-control"  placeholder="telephone" value="<?= $RDV->Tel_patient; ?>" >
  </label>
  </div>
  </td>
  <td>
  <div class="form-groupe">
  <label>Adress patient
  <input type="text"  name="Adress_patient" class="form-control" placeholder="nom patient" value="<?= $RDV->Adress_patient; ?>">
  </label>
  </td>
  </tr>
  
  
    </div>
    </legend>
    </table>
    
    <fieldset><legend>Le Medicin doit etre enregistrer
    <table>
    <div  class="form-groupe" >
    <tr>
    <td>
    <div  class="form-groupe" >
    <label>Nom du medecin
  <input type="text" name="Nom_inscrit" class="form-control" placeholder="nom medecin" value="<?= $RDV->Nom_inscrit; ?>" >
  </label>
  </div>
  </td>
  <td>
  <div  class="form-groupe" >
  <label>PRENOM Medecin
  <input type="text" name="prenom_inscrit" class="form-control" placeholder="prenom medecin" value="<?= $RDV->prenom_inscrit; ?>" >
  </label>
  </div>
  </td>
  </tr>
  <div  class="form-groupe" >
  <label>Domaine
  <input type="text" name="Domaine"  class="form-control" placeholder="domaine" value="<?= $RDV->Domaine; ?>" >
    
</label>


  
  </div>
  </table>
  
  </legend>
    <fieldset><legend>Les RDV doivent etre enregistrer
    <table>
  <tr>
    <td>
    <div   class="form-groupe">
    <label>Date  RDV
  <input type="text" name="Date_RDV" class="form-control" placeholder="prenom" value="<?= $RDV->Date_RDV; ?>">
  </label>
  </div>
  </td>
  <td>
  <div   class="form-groupe">
  <label>Heure debut du RDV
  <input type="texte" name="Heured_RDV" class="form-control"  placeholder="prenom" value="<?= $RDV->Heured_RDV; ?>" >
  </label>
  </div>
  </td>
  </tr>
  <tr>
  <td>
  <div class="form-groupe">
  <label>Heure fin du RDV
  <input type="texte" name="Heuref_RDV"  class="form-control" placeholder="prenom" value="<?= $RDV->Heuref_RDV; ?>" >
  </label>
  </div>
  </td>
  <td>
  <div class="form-groupe">
  <label>Nom du RDV
  <input type="text" name="Nom_RDV"  class="form-control" placeholder="prenom" value="<?= $RDV->Nom_RDV; ?>">
  </label>


    
    
    </div>
    </td>
    </tr>
    </table>
   
    </legend>

    <div class="form-groupe"> <br><br>
          


  <button type="submit" class="btn btn-info"name="modifier">Modifier</button>
  
   </div>
   </fieldset>
    </form>
    </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 </html>  
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
  
 
 
  
 
  $newRDV = 'INSERT INTO V_RDV_Patients_Inscrits (Nom_inscrit,prenom_inscrit,Domaine,Date_indispo,Heure_indispo) VALUES (?,?,?,?,?)';
$query = $pdo->prepare($newRDV);
$query->execute(array($_POST['Nom_inscrit'],$_POST['prenom_inscrit'],$_POST['Domaine']
,$_POST['Date_indispo'],$_POST['Heure_indispo']));
?>



<?php
session_start();
?>
<!DOCTYPE>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body class="bg-info">

<?php
  require_once '../view/heder.php';
  ?>
  

  
  
  <br><br>
 
  
  







  <div class="container">
  <div class="card">
  <div>
                            <h1 style="color:red;">GESTION DE L'INDISPONIBILITE DU MEDECIN</h1><br>
                            <p>BIENVENNUE DANS LE SERVICE DODONTOLOGIE</p>
                            <p>R-bonjour</p>
                            <h2>
                                 
                            </h2>
                              <p>
                              <?php echo $_SESSION['prenom_inscrit'].''.$_SESSION['Nom_inscrit'];?><br>
                              </p> 
                            
  <div class="container">
  <div class="card">
  <div>
                               
                                <form action = "verif-form.php" method = "get" style=" position: relative;left:550px;top:-40px;">
                                <input type = "search" name = "terme">
                                 <input type = "submit" name = "s" value = "Rechercher">
                                 
                                 <INPUT TYPE="button"   Value="DECONNETION" onclick="window.location='../index.php';"> 


                               


                                 
                                  
                                </form>
                            
                                </div>
                            <div class="card-header">
                            </div>
  <?php




            function pre_r( $array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
      }
  ?>

          <div class="card-body">
<div class="row justify-content-center">
  <div class="form-style-3">


 <form method="POST" id="formulaire" action="controle33.php"> 
  
 <fieldset><legend>
     <div class="form-groupe">
     <table>
    
  <tr>
 
  
  </tr>
  
  
    </div>
    </legend>
    </table>
    
    <fieldset><legend>Le Medicin doit etre enregistrer
    <table>
   
    <tr>
    <td>
    <div  class="form-groupe" >
    <label>Nom du medecin
  <input type="text" name="Nom_inscrit"  class="form-control"  placeholder="nom medecin" required pattern="^[A-Za-z '-]+$" 
  maxlength="10" required>
  </label>
  </div>
  </td>
  <td>
  <div  class="form-groupe" >
  <label>PRENOM Medecin
  <input type="text" name="prenom_inscrit"  class="form-control"  placeholder="prenom medecin" required pattern="^[A-Za-z '-]+$" 
  maxlength="10" required>
  </label>
  </div>
  </td>
  </tr>
  <div  class="form-groupe" >
  <label>Domaine
  <input type="text" name="Domaine"  class="form-control" placeholder="domaine" required pattern="^[A-Za-z '-]+$" 
  maxlength="15" required> 
    
</label>


  
  </div>
  </table>
  
  </legend>
    <fieldset><legend>Heure et date indisponible
    <table>
  <tr>
    <td>
    <div   class="form-groupe">
    <label>Dates  indisponibles
  <input type="date" name="Date_indispo" class="form-control" placeholder="prenom" max="01-12-30" min="01-09-2019">
  </label>
  </div>
  </td>
 
  
   
   </select>
  </div>
  </td>
  </tr>
  <tr>
  <td>
  <div class="form-groupe">
  <label for="utilise">Heure indispo : </label>
   <select name="Heure_indispo"  class="form-control">
   <option value=""> 08:00</option>
   <option value=""> 08:15</option>
   <option value=""> 08:30</option>
   <option value=""> 08:45</option>
   <option value=""> 09:00</option>
   <option value=""> 09:15</option>
   <option value=""> 09:30</option>
   <option value=""> 09:45</option>
   <option value=""> 10:00</option>
   <option value=""> 10:15</option>
   <option value=""> 10:30</option>
   <option value=""> 10:45</option>
   <option value=""> 11:00</option>
   <option value=""> 11:15</option>
   <option value=""> 11:30</option>
   <option value=""> 11:45</option>
   <option value=""> 12:00</option>
   <option value=""> 15:00</option>
   <option value=""> 15:15</option>
   <option value=""> 15:30</option>
   <option value=""> 15:45</option>
   <option value=""> 16:00</option>
   <option value=""> 16:15</option>
   <option value=""> 16:30</option>
   <option value=""> 16:45</option>
   <option value=""> 17:00</option>
   
   </select>
  </div>
  </td>
  <td>
  <div class="form-groupe">
  


    
    
    </div>
    </td>
    </tr>
    </table>
   
    </legend>

    <div class="form-groupe"> <br><br>
          


  <button type="submit" class="btn btn-info"name="valider">save</button>
  <button type="submit" class="btn btn-info"name="afficher"><a href="../view/jour_indispo2.php">afficher</button>
   </div>
   </fieldset>
    </form>
    </div>
    </div>
</div>


<script>
    $(document).ready(function(){
      $('#formulaire').submit(function(){
        alert('Formulaire envoyee');
      });
    });


</script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 </html>  
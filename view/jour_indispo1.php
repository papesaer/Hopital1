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

$sql="SELECT * FROM V_RDV_Patients_Inscrits WHERE id=id and Domaine='RHUMATOLOGIE'";
$query = $pdo->prepare($sql);
$query->execute();
$V_RDV_Patients_Inscrits = $query->fetchAll(PDO::FETCH_OBJ);





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
  require_once 'header1.php';
  ?><br><br><br><br><br><br><br><br>
<body class="bg-info">

  
  
  
                    <h1><CAPTION> Liste de tous les jous indispos du medecin </CAPTION></h1>


                    <div>
                              <table class="table table-bordered">
                                   <tr>
                    

                                       <th>Date INDISPO</th>

                                       <th>Heure INdispo</th>

                                       <th>Spetialisation</th>

                                       <th>Nom Docteur</th>

                                       <th>Prenom Docteur </th>

                                       

                                       <th>Action</th>


                                       
                                   </tr>

                     <?php foreach($V_RDV_Patients_Inscrits  as $RDV):  ?>


                        <tr>
                    
                           
                            <td><?= $RDV->Date_indispo; ?></td>
                            <td><?= $RDV->Heure_indispo; ?></td>
                
                            <td><?= $RDV->Domaine; ?></td>
                            <td><?= $RDV->Nom_inscrit; ?></td>
                            <td><?= $RDV->prenom_inscrit; ?></td>
                            
                            <td><a onclick="return confirm('Voulez vous vraiment modifier?')" href="modification.php?id=<?=$RDV->id;?>" class="btn btn-info">Modifier</a>
                            <a onclick="return confirm('Voulez vous vraiment supprimer?')" href="sup_b.php?id=<?=$RDV->id;?>" class="btn btn-danger">SUpprimer</a>
                            </td>
                        
                        </tr>
                    <?php endforeach;  ?>
                              </table>

                
  
  </body>
  </div>
 </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 


</html>
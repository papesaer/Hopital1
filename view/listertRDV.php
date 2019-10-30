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

$sql="SELECT * FROM V_RDV_Patients_Inscrits WHERE id=id and Domaine='HEMATOLOGIE'";
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
  require_once 'heder.php';
  ?><br><br><br><br><br><br><br><br>
<body class="bg-info">

  
  
  
                    <h1><CAPTION> Liste des de tous les RDV </CAPTION></h1>


                    <div>
                              <table class="table table-bordered">
                                   <tr>
                                    
                                        <th>ID</th>
                                      
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

                                       

                                       <th>Action</th>


                                       
                                   </tr>

                     <?php foreach($V_RDV_Patients_Inscrits  as $RDV):  ?>


                        <tr>
                            <td><?= $RDV->id; ?></td>
                            <td><?= $RDV->Nom_Patient; ?></td>
                            <td><?= $RDV->Prenom_patient; ?></td>
                            <td><?= $RDV->Adress_patient; ?></td>
                            <td><?= $RDV->Tel_patient; ?></td>
                            <td><?= $RDV->Date_RDV; ?></td>
                            <td><?= $RDV->Heured_RDV; ?></td>
                            <td><?= $RDV->Heuref_RDV; ?></td>
                            <td><?= $RDV->Nom_RDV; ?></td>
                            <td><?= $RDV->Domaine; ?></td>
                            <td><?= $RDV->Nom_inscrit; ?></td>
                            <td><?= $RDV->prenom_inscrit; ?></td>
                            
                            <td><a onclick="return confirm('Voulez vous vraiment modifier?')" href="modification.php?id=<?=$RDV->id;?>" class="btn btn-info">Modifier</a>
                            <a onclick="return confirm('Voulez vous vraiment supprimer?')" href="sup.php?id=<?=$RDV->id;?>" class="btn btn-danger">SUpprimer</a>
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
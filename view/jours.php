<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

<body>
<?php
  require_once 'heder.php';
  ?><br><br>
  <a target="_BLANK" title="Titre du lien" href="index.php">
     DECONNEXION
</a>
                         <p>R-bonjour</p>
                              <p>
                              <?php echo $_SESSION['prenom_inscrit'].''.$_SESSION['Nom_inscrit'];?><br>
                              </p> 
  <div class="panel-heading">
  <h3 class="panel-title">Bienvenue dans votre service HEMATOLOGIE<br>
   Voici votre clendrier de disponibilite du Medecin<Td>
       <input type="checkbox" class="choix"></Td></h3>
</div>
<Td><input type="checkbox" class="choix"></Td><span><p>Sa permet de confirmer  les moments 
     indisponibles du Medecin : Cochez si vous etes indisponible!!!</p></span>
    <table>
           <tr>
               <th>HOURS</th>
               <th>LUNDI</th>
               <th>MARDI</th>
               <th>MERCREDI</th>
               <th>JEUDI</th>
               <th>VENDREDI</th>
           </tr>
           <Tr>
                <Td>8h00-8h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
               <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>8h15-8h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>8h30-8h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>8h45-9h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>9h00-9h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>9h15-9h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>9h30-9h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>9h45-10h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>10h00-10h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>10h15-10h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>10h30-10h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>10h45-11h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>11h00-11h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>11h15-11h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>11h30-11h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>11h45-12h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr id="pause">
                <Td>PAUSE!</Td>
                <Td>PAUSE!</Td>
                <Td>PAUSE!</Td>
                <Td>PAUSE!</Td>
                <Td>PAUSE!</Td>
                <Td>PAUSE!</Td>
           </Tr>
           <Tr>
                <Td>15h00-15h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
              
           </Tr>
           <Tr>
                <Td>15h15-15h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>15h30-15h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           <Tr>
                <Td>15h45-16h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>16h00-16h15</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>16h15-16h30</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>16h30-16h45</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           <Tr>
                <Td>16h45-17h00</Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
                <Td><input type="checkbox" class="choix"></Td>
           </Tr>
           


    
    
    </table>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
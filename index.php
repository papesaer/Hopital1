<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <title>Hello, world!</title>

<link rel="stylesheet" href="ssets/css/cours.css">
</head>
<body class="btn-info">

<div id="page">

<?php
  require_once 'view/header.php';
  
  ?>
  
  <div id="menu1"></div>
  <div id="menu2"></div>
         <div id="principal">
                 
        
    <br><h2>WELCOM TO YOUR APPLICATION: <br><br><span>H_PLANNING !</span></h2>
                 <P>Un compte H_PLANNING vous permet de:</P>
                 <p>_Mieu gerer votre agenda</p>
                 <p>_Et bien planifier vos Rendez-Vous</p>
            <br>   
            <div id="carre">
                        
                        <table>
                           <p>OBTION:</p>
                            <tr>
                                <td><button type="button" class="btn btn-success"><a href="view/connection.php">CONNECTION</a></button></td>
                                <td><button type="button" class="btn btn-success"><a href="view/formulaire2.php">INSCRIPTION</a></button></td>
                            </tr>
                            
                        </table>
             </div>

                </div>
   
     <?php
  require_once 'view/footer.php';
  ?>
  </div>
  
</body>
</html>
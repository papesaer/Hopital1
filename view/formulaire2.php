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
<link rel="stylesheet" href="../assets/css/cours.css">
<style>
body {font-family: sans-serif;

margin: 0;
padding: 0;
}
.box{
  width:500px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: orange;
  text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px; 
  width: 100px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;

}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 15px auto;
  border: none;
  cursor: pointer;
  width: 40%;
  border-radius: 24px;
}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]:focus,.box input[type = "submit"]:focus{
{
    border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px; 
  width: 10px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}



}
</style>

<body  class="bg-info">

<header>
            <img src="../assets/image/clendrier.jpeg" style="float:left;">
  
            <img src="../assets/image/medicin.jpeg" style="float:right;">
                    <div id="DivClignotante" style="visibility:visible; text-align: center; color:orange;">
<h1>H_PLANNING</h1>
                    </div>
            <script type="text/javascript">
                var clignotement = function(){
                 if (document.getElementById('DivClignotante').style.visibility=='visible'){
                 document.getElementById('DivClignotante').style.visibility='hidden';
                }
                 else{
                 document.getElementById('DivClignotante').style.visibility='visible';
                 }
                };
                periode = setInterval(clignotement, 800);
            </script>
   </header>
  
                
<h3>INSCRIPTION FORM</h3>
  

                
<form class="box" action="controle2.php" method="POST">



  
    <table>
        <tr>
            <td>
            <label><p>Entrer votre nom</p></label>
            <input type="text" placeholder="Enter Nom" name="Nom_inscrit"  id="nom"  required
             required pattern="^[A-Za-z '-]+$" maxlength="10">
             </td>
             <td>
	        <label><p>Entrer votre prenom</p></label>
            <input type="text" placeholder="Enter Prenom" name="prenom_inscrit" id="prenom"  
            required pattern="^[A-Za-z '-]+$" maxlength="10" required> 
            </td>
    </tr>
    <tr>
            <td>
	<label><p>Entrer votre specialite</p></label>
    <input type="text" placeholder="Enter Spetiality" name="Domaine"  id="specialite"  
    required pattern="^[A-Za-z '-]+$" required>
            </td>
             <td>
    <label><p>Entrer votre Statut</p></label>
	<input type="text" placeholder="Enter statut" name="Statut" id="statut" required pattern="^[A-Za-z '-]+$" 
  maxlength="10" required>
            </td>
    </tr>
    <tr>
            <td>
  <label><p>Entrer votre login</p></label>
	<input type="text" placeholder="Enter login" name="Logine" id="user" required pattern="^[A-Za-z '-]+$" maxlength="10" required>
            </td>
             <td>

    <label><p>Password</p></label>
    <input type="text" placeholder="Enter Password" name="Mot_pass" id="mot_pass" value="Mot_pass" required>
    </td>
    </tr>
    <tr>
            <td>
    <button type="submit">OK</button>
    </td>
             <td>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </td>
    
    </tr>
    
  </div>
  </table>
</form>

   

</body>

</html>







</body>
</html>
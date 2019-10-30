<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

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
  color: black;
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
.box input[type = "submit"]
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
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}



}

</style>
</head>
<body class="bg-info">
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
 
  
  
   
<h1>Login Form</h1>
<?php if(!empty($message)): ?>
		<p><?= $message; ?></p>
	<?php endif; ?><?php if(!empty($message)): ?>
		<p><?= $message; ?></p>
	<?php endif; ?>
  
<form class="box" action="../controller/dologin.php" method="POST">
<?php
    //Tester la superglobale
    if(isset($_GET['msg'])){
        echo "<b style='color:red;'>" . $_GET['msg'] . "</b>";
        
    }
    
?><br>

  
    <label><p>Username</p></label>
    <input type="text" placeholder="Enter Username" name="Logine" maxlength="8">
    <i class="fas fa-user-plus"></i>
    <label><p>Password</p></label>
    <input type="password" placeholder="Enter Password" name="Mot_pass" maxlength="10">
        
    <button type="submit" name="connexion">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  

  
  </div>  

 
</form>

</body>
</html>

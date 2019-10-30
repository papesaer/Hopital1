<?php
 //  Connexion à la base de données
 
 try{
    $connexion = new PDO('mysql:host=localhost;dbname=Hopital1', 'root', 'papepol1');
 }catch(Exception $e){
    echo "Échec : " . $e->getMessage();
 }
 $id=$_GET['id'];
 
 $sql="DELETE FROM V_RDV_Patients_Inscrits  WHERE id LIMIT 1";
 $statement=$connexion->prepare($sql);
if($statement->execute([':id'=>$id])){
    header("Location:listertRDV1.php");
};

 
?>

<!doctype html>

<head>
    <meta charset="UTF-8">
   
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>
<body>
   <h1>su ppression reuissi</h1>
   
</body>
</html>
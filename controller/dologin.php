<?php
if(empty($_POST['Logine'])){
    //le compt doit etre rempli
    $msg = "Login ou mot de passe doivent etre rempli";
				
    //Redirection
    header("location:" . "../view/connection.php?msg=$msg");
    
    
    exit;

}
if(!empty($_POST['Logine']) && $data->active != 1 || $data->active !=2 || $data->active != 3){
    //le compt doit etre rempli
    $msg = "Le mot de pass et le login doivent etre existant";
				
    //Redirection
    header("location:" . "../view/connection.php?msg=$msg");
    
    


}
//Formulaire soumis
    if(!empty($_POST['Logine'])){
	
		//Activer le gestionnaire de session.
		session_start();
		
		//Obtenir la saisie de l'internaute
		$Logine = $_POST['Logine'];
		$Mot_pass = $_POST['Mot_pass'];
		
		//Le code SQL
		$query = "SELECT * FROM Inscrits WHERE Logine='$Logine' AND Mot_pass='$Mot_pass';";
		
		//Lien de connexion (API MySQLi)
		$db = mysqli_connect('localhost','root','papepol1','Hopital1') or die("Connexion impossible " . mysqli_error());
		
		//Execution et obtention d'un curseur
		$curseur = mysqli_query($db, $query) or die("exec impossible " . mysqli_error());
		
		//Test du nombre de lignes obtenu
		if(mysqli_num_rows($curseur) == 1){
			//Authentification OK, obtenir les infos
			$data = mysqli_fetch_object($curseur);
			
			//Compte actif ou pas?
			if($data->active == 1 || $data->active ==2 || $data->active == 3){
				//Variables de session
				$_SESSION['auth'] = $Logine;
				$_SESSION['Nom_inscrit'] = $data->Nom_inscrit;
				$_SESSION['prenom_inscrit'] = $data->prenom_inscrit;
				$_SESSION['active'] = $data->active;
				$_SESSION['Statut'] = $data->Statut;
				$_SESSION['level'] = $data->level;
				
					//Test des droits
					
				if($data->active  && $data->level==1)
				{
					header("location:" . "../view/formulaire3.php");
				}else if($data->active  && $data->level==2)
				{
					header("location:" . "../view/formulaire_medecin1.php");
				}
				
				else if($data->active  && $data->level==3){
					header("location:" . "../view/formulaire33.php");
				}else if($data->active  && $data->level==4)
				{
					header("location:" . "../view/formulaire_medecin2.php");
				}else if($data->active  && $data->level==5){
					header("location:" . "../view/formulaire_medecin3.php");
				}else if($data->active  && $data->level==6){
					header("location:" . "../view/formulaire333.php");
				}
				
				}
			}
	}
	else{
		//Le compte est inactif
		$msg = "Login ou mot de passe incorrect";
		
		//Redirection
		header("location:" . "connection.php?msg=$msg");
		exit;
	}
?>
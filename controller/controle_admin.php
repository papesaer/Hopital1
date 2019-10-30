<?php
	//Formulaire soumis
    if(!empty($_POST['Logine'])){
	
		//Activer le gestionnaire de session.
		session_start();
		
		//Obtenir la saisie de l'internaute
		$Logine = $_POST['Logine'];
		$Mot_pass = $_POST['Mot_pass'];
		
		//Le code SQL
		$query = "SELECT * FROM Inscrits WHERE login='$Logine' AND Mot_pass='$Mot_pass';";
		
		//Lien de connexion (API MySQLi)V_RDV_Patients_Inscrits V_RDV_Patients_Inscrits 
		$db = mysqli_connect('localhost','root','papepol1','Hopital1') or die("Connexion impossible " . mysqli_error());
		
		//Execution et obtention d'un curseur
		$curseur = mysqli_query($db, $query);
		
		//Test du nombre de lignes obtenu
		if(mysqli_num_rows($curseur) == 1){
			//Authentification OK, obtenir les infos
			$data = mysqli_fetch_object($curseur);
			
			//Compte actif ou pas?
			if($data->active == 1){
				//Variables de session
				$_SESSION['Nom_inscrit'] = $data->Nom_inscrit;
				$_SESSION['prenom_inscrit'] = $data->prenom_inscrit;
				$_SESSION['Statut'] = $data->Statut;
				$_SESSION['active'] = $data->active;
        $_SESSION['Mot_pass'] = $data->Mot_pass;
        $_SESSION['Logine'] = $data->Logine;
        $_SESSION['Domaine'] = $data->Domaine;
        $_SESSION['Mot_pass'] = $data->Mot_pass;
				
				//Test des droits
				switch($data->Statut){
					case 'SECRE1': header("location:" . "formulaire3.php");
					exit;
					break;
					
					case 'SECRE2': header("location:" . "formulaire33.php");
					exit;
					break;
					
				}
			}
			else{
				//Le compte est inactif
				$msg = "Login ou mot de passe incorrect";
				
				//Redirection
				header("location:" . "connection.php?msg=$msg");
				exit;
			}
		}
		else{
			//Aucun utilisateur
			$msg = "Login ou mot de passe incorrect";
			
			//Redirection
			header("location:" . "connection.php?msg=$msg");
			exit;
		}
	}
?>
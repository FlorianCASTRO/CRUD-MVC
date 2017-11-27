<?php 

	include 'modele/database.php';
	include 'modele/database.fn.php';



	if ( !empty($_POST)) 
	{
		$loginError = null;
		$passwordError = null;
		$nameError = null;
		$forenameError = null;
		
		$login = $_POST['login'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$forename = $_POST['forename'];

		// Validation des données insérées
		$valid = true;
		if (empty($login)) 
		{
			$loginError = 'Please enter a login';
			$valid = false;
		}

		if (empty($password)) 
		{
			$passwordError = 'Please enter a password';
			$valid = false;
		}
		
		if (empty($name)) 
		{
			$nameError = 'Please enter a name';
			$valid = false;
		}
		
		if (empty($forename)) 
		{
			$forenameError = 'Please enter a forename';
			$valid = false;
		}
		
		// Insertion des données
		if ($valid) 
		{
			insertOne($login,$password,$name,$forename);
			header("Location: index.php");
		}
	}
		include_once('/vue/vue_createOne.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<?php 

	include 'modele/database.php';
	include 'modele/database.fn.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) 
	{
		header("Location: index.php");
	}
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
			updateOne($login,$password,$name,$forename,$id);
			header("Location: index.php");
		}
	} 
	else 
	{
		$data = FindOne($id);
		$login = $data['login'];
		$password = $data['password'];
		$name = $data['name'];
		$forename = $data['forename'];
	}
		include_once('/vue/vue_updateOne.php');
?>

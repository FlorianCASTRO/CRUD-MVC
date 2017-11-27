<?php 
	include 'modele/database.php';
	include 'modele/database.fn.php';
	
	if ( !empty($_GET['id'])) 
	{
		$id = (int) $_GET['id'];
	}
	
	if ( !empty($_POST)) 
	{
		$id = (int) $_POST['id'];
		
		// Suppréssion des données
		deleteOne($id);
		header("Location: index.php");
		
	} 
	include_once('/vue/vue_deleteOne.php');
?>

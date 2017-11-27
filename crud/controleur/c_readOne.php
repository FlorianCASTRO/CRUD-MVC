<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<?php 
	if (empty($_GET['id'])) 
	{
    header('Location: index.php');
	}
	else
	{
    $id = (int) $_GET['id'];

	include 'modele/database.php';
	include 'modele/database.fn.php';
	$data = FindOne($id);
	include_once('/vue/vue_readOne.php');
} ?>
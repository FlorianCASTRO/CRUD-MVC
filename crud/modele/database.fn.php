<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<?php

	function FindAllClient()
	{
		$pdo = Database::connect();
		$sql = 'SELECT * FROM customers ORDER BY id DESC';
		$query = $pdo->query($sql);
		if ($query) 
		{
			return $query->fetchAll(PDO::FETCH_ASSOC);
		} 
		else 
		{
			return false;
		}
	}
	
	function FindOne($id)
	{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM customers where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		return $q->fetch(PDO::FETCH_ASSOC);
	}
	
	function insertOne($login,$password,$name,$forename)
	{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO customers (login,password,name,forename) values(?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($login,$password,$name,$forename));
		Database::disconnect();
	}
	
	function deleteOne($id)
	{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM customers  WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
	}
	
	function updateOne($login,$password,$name,$forename,$id)
	{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE customers  set login = ?, password = ?, name =?, forename = ? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($login,$password,$name,$forename,$id));
		Database::disconnect();
	}
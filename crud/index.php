<html lang="fr">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<?php

	if (empty($_GET["action"]))
	{
	include_once('controleur/c_readALL.php');
	}
	else
	{
		if ($_GET["action"] == "read")
		{	
			include_once('controleur/c_readOne.php');
		}
		else if ($_GET["action"] == "creer")
		{	
			include_once('controleur/c_createOne.php');
		}
		else if ($_GET["action"] == "delete")
		{	
			include_once('controleur/c_deleteOne.php');
		}
		else if ($_GET["action"] == "modif")
		{	
			include_once('controleur/c_updateOne.php');
		}
	}
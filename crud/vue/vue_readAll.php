<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    		<div class="row">
    			<h3>PHP CRUD</h3>
    		</div>
			<div class="row">
				<p>
					<a href="index.php?action=creer" class="btn btn-success">Create</a>
				</p>
				
				<table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                  <th>Login</th>
		                  <th>Password</th>
		                  <th>Name</th>
		                  <th>Forename</th>
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
						<?php foreach ($Clients as $client) { ?>
						   	<tr>
							<td><?php echo $client['login'];?></td>
							<td><?php echo $client['password'];?></td>
							<td><?php echo $client['name'];?> </td>
							<td><?php echo $client['forename'];?> </td>
							<td width=250>
							<a class="btn" href="index.php?id=<?php echo $client['id']; ?>&action=read">Read</a>
							<a class="btn btn-success" href="index.php?id=<?php echo $client['id']; ?>&action=modif">Update</a>
							<a class="btn btn-danger" href="index.php?id=<?php echo $client['id']; ?>&action=delete">Delete</a>
							</td>
							</tr>
					   <?php } ?>
				      </tbody>
	            </table>
    	</div>
    </div> <!-- /container -->
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Read a Customer</h3>
		    		</div>
		    		
	    			<div class="form-horizontal" >
						<div class="control-group">
					    <label class="control-label">Login</label>
					    <div class="controls">
						    <label class="checkbox">
						     	<?php echo $data['login'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Password</label>
					    <div class="controls">
						    <label class="checkbox">
						     	<?php echo $data['password'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Name</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['name'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Forename</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['forename'];?>
						    </label>
					    </div>
					  </div>
					    <div class="form-actions">
						  <a class="btn" href="index.php">Back</a>
					   </div>
					</div>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
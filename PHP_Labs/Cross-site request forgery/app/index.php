<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cross-site request forgery</title>

	<link href="static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="static/css/main.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-6">
				<img src="/static/img/DP.png" width="170" height="35"  class="responsive">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card mt-4">
					<div class="card-header" style="text-transform: uppercase;">Cross-site request forgery</div>
					<div class="card-body">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<input type="text" class="form-control" name="firstname" placeholder="firstname"/><br/>
							<input type="text" class="form-control" name="lastname" placeholder="lastname"/><br/>
							   <button class="btn btn-primary" type="submit">Submit Button</button>
						   </div>
						</form>
           			</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		echo '<center>' .$_POST['firstname'] . ' ' . $_POST['lastname']. '</center>';
	}
?>
</html>

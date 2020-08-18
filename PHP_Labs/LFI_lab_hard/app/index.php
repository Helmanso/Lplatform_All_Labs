
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Locale File Inclusion</title>

	<link href="static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="static/css/main.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-6">
				<img src="static/img/DP.png" width="170" height="35"  class="responsive">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card mt-4">
					<div class="card-header" style="text-transform: uppercase;">Locale File Inclusion</div>
					<div class="card-body">
						<div class="col-md-6 offset-md-3 text-center mt-2">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                					<div class="form-group">
									<label>Selects</label>
									<select name="filename" class="form-control">
										<option value="text/intro.txt">Intro</option>
										<option value="text/chapter1.txt">Chapter 1</option>
										<option value="text/chapter2.txt">Chapter 2</option>
									</select>
								</div>
               			    <button class="btn btn-primary" type="submit">Submit Button</button>
               			</div>
						</form>
						</div>
							</div>
           			</div>
				</div>
			</div>
		</div>
    </div>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = urldecode($_REQUEST['filename']);
		if (!strchr($name, "../"))
		{
			$name = urldecode($name);
			$f = fopen($name, "r") or die("Unable to open file!");
			$read =  fread($f, filesize($name));
			echo $read;
			fclose($f);
		}
		else
			echo "<center> Not Found </center>";}
	?>
	
</body>

</html>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SQL INJECTION (UNION)</title>

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
					<div class="card-header" style="text-transform: uppercase;">SQL INJECTION (UNION)</div>
					<div class="card-body">
						<div class="col-md-6 offset-md-3 text-center mt-2">
                            <a href= "index.php?id=1">Article 1 </a><br>
                            <a href= "index.php?id=2">Article 2 </a><br>
                            <a href= "index.php?id=3">Article 3 </a><br>
						</div>
							</div>
						</form>
           			</div>
				</div>
			</div>
		</div>
    </div>
    
    <?php
    include 'query.php';

        if (isset($_GET['id']))
            {
                $data =  data_get($_GET['id']);
                echo '<div class="col-md-6 offset-md-3 text-center mt-2">' . $data[2] . '</div>';
            }
    ?>
</body>

</html>

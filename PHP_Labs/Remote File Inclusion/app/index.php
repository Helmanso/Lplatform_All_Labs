<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remote file inclusion</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
					<div class="card-header" style="text-transform: uppercase;">Remote File inclusion</div>
					<div class="card-body">
						<form method="get">
							<div class="row mt-5 mb-5">
								<div class="col-md-6 ml-3">
	                				Set language of page:
                                    <select name="language">
                                        <option value="english">English</option>
                                        <option value="melay">French</option>
                                    </select>
                                    <input type="submit">
								</div>
							</div>
						</form>
           			</div>
				</div>
			</div>
		</div>
    </div>
    <?php
        if ( isset( $_GET['language'] ) ) {
            echo '<pre>';
            // Problematic code snippet:
            // Example: include statement + adding of file extension 
            // begin
            include( $_GET['language'] . '.php' );
            // end
            echo '</pre>';
        }
        if ( isset( $_GET['page'] ) ) {
            echo 'Included with <pre style="display:inline">include</pre>';
            echo '<pre>';
            // Problematic code snippet:
            // Example: include statement wo any obstacles
            // begin               
            include( $_GET['page'] );
            // end
            echo '</pre>';
        }
    ?>
</body>

</html>

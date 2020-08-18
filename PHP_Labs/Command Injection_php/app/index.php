
  <!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Live demonstrations</title>

<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/css/datepicker3.css" rel="stylesheet">
<link href="/static/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="/static/js/lumino.glyphs.js"></script>
<script src="/static/js/hints.js"></script>

</head>

<body>
	<div id="header">
        <img width="150" height="35" src="static/img/DP.png" />
	</div>
</br>
		<center>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Command Injection !</div>
					<div class="panel-body">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
								<div class="form-group">
								<label>Select image resize</label>
								<select name="size" class="form-control">
									<option value="50">50%</option>
									<option value="150">150%</option>
								</select>
							
						   <button class="btn btn-primary" type="submit">Submit Button</button>
               			</div>
						</form>
					</div>
					<center> 		
						<img id="imageBox" src="" width="100%" height="100%"/> 		<br/>
					</center>
				</div>
			</div><!-- /.col-->

		</div><!-- /.row -->
	
	</div><!--/.main-->
		</center>

	<script src="/static/js/jquery-1.11.1.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

		function getRndInteger(min, max) {
			return Math.floor(Math.random() * (max - min + 1) ) + min;
		}
		var nr = getRndInteger(99999999,99999999999);
		document.getElementById('imageBox').src = "/static/img/bones.png?" + nr;

	</script>	
		<?php 
		if (isset($_POST["size"])) {
			echo exec('echo image is is : '  .$_POST["size"]);
		}
		?>
</body>

</html>

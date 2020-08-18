from flask import Flask, request, url_for, render_template_string

app = Flask(__name__, static_url_path='/static', static_folder='static')
app.config['DEBUG'] = True


@app.errorhandler(404)
def page_not_found(e):
    template = """

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Live demonstrations</title>

<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/css/datepicker3.css" rel="stylesheet">
<link href="/static/css/styles.css" rel="stylesheet">
<script src="/static/js/hints.js"></script>
<!--Icons-->
<script src="/static/js/lumino.glyphs.js"></script>

</head>

<body>	
	<div id="header">
        <img width="150" height="35" src="/static/img/DP.png" />
	</div>
	<center>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Server-side Template Injection</div>
					<div class="panel-body">
							{0}
               			</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		</center>
		
	
	</div><!--/.main-->

	<script src="/static/js/jquery-1.11.1.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
</body>

</html>


""".format(request.url)
    return render_template_string(template), 404


if __name__ == "__main__":
    app.run(host='0.0.0.0')
from flask import Flask, request, url_for, render_template

app = Flask(__name__, static_url_path='/static',template_folder='.' ,static_folder='static')
app.config['DEBUG'] = True


@app.route("/")
def home():
	return render_template('index.html', value="Templates should not be created from user-controlled input. User input should be passed to the template using template parameters.")



if __name__ == "__main__":
    app.run(host='0.0.0.0')
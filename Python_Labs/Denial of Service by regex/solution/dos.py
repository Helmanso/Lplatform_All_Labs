from flask import Flask, request, url_for, render_template, redirect
import re
from email_validator import validate_email, EmailNotValidError

app = Flask(__name__, static_url_path = '/static', template_folder='.',static_folder = 'static')
app.config['DEBUG'] = True

@app.route("/")
def start():
    return render_template("index.html")

@app.route("/verify_email", methods = ['POST'])
def regex():
    email = request.form['email']

    try :
        valid = validate_email(email)
        return render_template("index.html", result = "Matched!")
    except EmailNotValidError as e:
        return render_template("index.html", result = "Not matched!")

@app.errorhandler(404)
def page_not_found(e):
    return render_template("404.html")


if __name__ == "__main__":
  app.run(host = '0.0.0.0')

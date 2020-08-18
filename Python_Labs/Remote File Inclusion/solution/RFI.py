from flask import Flask, request, url_for, render_template, redirect, current_app
import datetime, requests, os, validators
import os, urllib, re

app = Flask(__name__, static_url_path='/static', template_folder='.', static_folder='static')
app.config['DEBUG'] = True

@app.route("/")
def start():
    return render_template("index.html")

def is_encoded(payload):
    while len(urllib.parse.unquote(payload)) != len(payload) :
        payload = urllib.parse.unquote(payload)
    return payload

@app.route("/cmd", methods=['POST'])
def cmd():
    filename = request.form['filename']
    filename = is_encoded(filename)
    read='Not Found'
    if '../' not in filename:
        filename = urllib.parse.unquote(filename)
        if os.path.isfile(current_app.root_path + '/'+ filename):
            with current_app.open_resource(filename) as f:
                read = f.read()
        else :
            return render_template("404.html")
    s = str(read.strip())
    read = s.replace("b\"", "").replace("\"", "")
    read = eval(read)
    return render_template("index.html",result = read)

@app.errorhandler(404)
def page_not_found(e):
    return render_template("404.html")


if __name__ == "__main__":
    app.run(host='0.0.0.0', threaded=True)

import os
from flask import Flask, request, url_for, render_template, redirect


app = Flask(__name__, static_url_path='/static', template_folder='.', static_folder='static')
app.config['DEBUG'] = True

@app.route("/")
def start():
    return render_template("index.html")


@app.route("/home", methods=['POST'])
def home():
    sizeImg = request.form['size']
    if sizeImg.isnumeric() :
        os.system('convert static/img/bones.png -resize '+sizeImg+'% static/img/bones.png')
    else :
        return render_template("404.html")
    return render_template("index.html")

@app.errorhandler(404)
def page_not_found(e):
    return render_template("404.html")


if __name__ == '__main__':
    app.run(debug=True,host='0.0.0.0')


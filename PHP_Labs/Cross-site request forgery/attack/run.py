import requests


def main(url):
    req = requests.post(url, data={'firstname' : 'Hakim', 'lastname' : 'El Mansouri'})
    result = bool(req.text.find("Hakim El Mansouri") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost/"
	res = main(url)
	print(res)
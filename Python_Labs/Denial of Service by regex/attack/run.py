import requests


def main(url):
    
    try :
        requests.post(url, timeout=3 ,data={'email' : "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"})
        result = False
        msg = "You are in good hands"
    except requests.exceptions.Timeout: 
        msg = "The app is vulnerable"
        result = True
    return (result, msg)

if __name__ == '__main__':
	url = "http://localhost:5000/verify_email"
	res = main(url)
	print(res)
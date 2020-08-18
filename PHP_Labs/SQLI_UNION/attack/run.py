
import sys, requests
from bs4 import BeautifulSoup


def attack(url):
    r = requests.get(url + '\'')
    soup = BeautifulSoup(r.content, 'html.parser')
    text = soup.get_text()
    if text.find("unrecognized token:") < 0:
        print("You are in good hands")
    else :
        print("The app is vulnerable")


if __name__ == "__main__":
    attack("http://localhost/index.php?id=1")
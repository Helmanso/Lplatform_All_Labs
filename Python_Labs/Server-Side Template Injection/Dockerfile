FROM alpine:3.7
RUN apk update --no-cache && apk add git \
python2-dev \
py2-pip \ 
bash

COPY . /lab
WORKDIR /lab
RUN pip install -r requirements.txt
CMD [ "python2", "app/SSTI.py" ]
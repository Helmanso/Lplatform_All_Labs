FROM alpine:3.7
RUN apk update --no-cache && apk add python3 \
python3-dev \
py3-pip

COPY . /lab
WORKDIR /lab
RUN pip3 install -r requirements.txt
ENTRYPOINT [ "python3", "app/redirect.py" ]

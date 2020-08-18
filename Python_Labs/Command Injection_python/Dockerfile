FROM alpine:3.7
RUN apk update --no-cache && apk add python3 \
python3-dev \
py3-pip \ 
git \
bash \
imagemagick

COPY . /lab
WORKDIR /lab/app
RUN pip3 install -r ../requirements.txt
CMD [ "python3", "CMD.py" ]
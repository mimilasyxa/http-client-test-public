FROM ubuntu:22.04

RUN \
    apt update \
    && apt install -y software-properties-common \
    && add-apt-repository --yes --update ppa:ansible/ansible \
    && apt update \
    && apt install -y ansible

WORKDIR /home/ansible

COPY . /home/ansible/

CMD [ "tail", "-f","/dev/null" ]
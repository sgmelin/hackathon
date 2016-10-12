FROM php:7.0-apache
RUN apt-get update
RUN apt-get install git-core vim -y
RUN git clone https://github.com:443/sgmelin/hackathon.git /home/root/hackathon/
RUN cp /home/root/hackathon/www/* /var/www/html
COPY start.sh /tmp/start.sh
CMD sh /tmp/start.sh


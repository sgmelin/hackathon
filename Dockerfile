FROM php:7.0-apache
RUN apt-get update
RUN apt-get install git vim ssh-client -y
RUN git clone https://github.com:443/sgmelin/hackathon.git /tmp/hackathon/
RUN mv /tmp/hackathon/www/* /var/www/html


FROM ubuntu:latest

MAINTAINER visajchan@3112
RUN sudo apt-get update
RUN sudo apt-get install apache2

EXPOSE 8000
ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]

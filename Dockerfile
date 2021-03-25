
FROM ubuntu:updated

MAINTAINER visajchan@3112

RUN apt-get install -y apache2
RUN apt-get install -y apache2-utils
EXPOSE 8000
ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]

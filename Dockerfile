FROM ubuntu 
RUN apt-get update && apt-get install -y apt-utils && apt-get install -y apache2 && apt-get install -y apache2-utils

RUN apt-get clean 
EXPOSE 8000
CMD [ “-DFOREGROUND”]

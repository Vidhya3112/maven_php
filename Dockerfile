FROM ubuntu 
RUN apt-get update && apt-get install -y apache2 

RUN apt-get clean 
EXPOSE 8000
CMD [ “-DFOREGROUND”]

FROM ubuntu 
RUN apt-get update && apt-get install apache2 

RUN apt-get clean 
EXPOSE 8000
CMD [ “-DFOREGROUND”]

FROM ubuntu 
RUN apt-get update 
RUN apt-get install apache 

RUN apt-get clean 
EXPOSE 8000
CMD [ “-DFOREGROUND”]

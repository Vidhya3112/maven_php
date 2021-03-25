pipeline {
	
	environment{
		registry = "vidhya3112/devops"
		registryCredentials = 'docker-hub-id'
		dockerImage = ''
	}
	
	
    agent any
	
	

    stages {
	    
	    stage('Clone Repo'){
		    steps {
			    git branch: 'master' , url: 'https://github.com/Vidhya3112/maven_php.git'
		    }
	    
	    }
	    
	    
	    
        stage ('Compile Stage') {

            steps {
                withMaven(maven : 'Maven-3.6.3') {
                    sh 'mvn clean compile'
                }
            }
        }

        stage ('Testing Stage') {

            steps {
                withMaven(maven : 'Maven-3.6.3') {
                    sh 'mvn test'
                }
            }
        }
	    
	  stage ('SonarQube Analysis') {

            steps {
                withMaven(maven : 'Maven-3.6.3') {
                    sh 'mvn sonar:sonar'
                }
            }
        }   
	 
        stage('Build image') {
        /* This builds the actual image */
            
		steps{
		    script{
        dockerImage = docker.build registry +":$BUILD_NUMBER"
            }
	    }
    }

        stage('Push image') {
        /* 
			You would need to first register with DockerHub before you can push images to your account*/
		steps{
			script{
        docker.withRegistry('',registryCredentials) {
            dockerImage.push()
	}
            } 
                echo "Trying to Push Docker Build to DockerHub"
        }
    }
        
        
        
    }
}

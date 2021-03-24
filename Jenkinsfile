pipeline {
    agent any
	
	

    stages {
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
        stage('Build image') {
        /* This builds the actual image */
            steps{
        app = docker.build("vidhya3112/devops")
            }
    }

        stage('Push image') {
        /* 
			You would need to first register with DockerHub before you can push images to your account
		*/steps{
        docker.withRegistry('https://registry.hub.docker.com', 'docker-hub-id') {
            app.push("${env.BUILD_NUMBER}")
            app.push("latest")
            } 
                echo "Trying to Push Docker Build to DockerHub"
        }
    }
        
        
        
    }
}

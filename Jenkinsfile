pipeline{
        environment{
                registry = "MauroTC90/d4a1"
                registryCredential = "dockerhub"
        }
        agent any
        stages{
                stage( 'Starting'){
                        steps{
                                sh 'echo starting....'
                        }
                }
                stage ('Checking Docker'){
                        steps{
                                sh 'sudo docker ps'
                        }
                }
                stage ('Build Image'){
                        steps{
                                script{
					dockerImage=docker.build registry +":$BUILD_NUMBER"
				}
		
                        }

                }

        }
}



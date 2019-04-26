pipeline{
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
				sh 'sudo docker build --tag=php54 .'
			}

		}

//		stage ('Deploy Container'){
//			steps{
				
//			}
//		}
	}
}

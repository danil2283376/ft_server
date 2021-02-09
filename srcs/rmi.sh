docker rm $(docker ps -a)
docker rmi -f $(docker images)

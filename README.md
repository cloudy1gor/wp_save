## WordPress + Docker Boilerplate

### Requirements
- WSL2
- Docker
- Make

### Steps to launch the boilerplate
1. Run `make docker.build` - builds Docker images from a Dockerfile
2. Run `make docker.start` - start one or more stopped containers
3. Run `make docker.wp.bash` - to run the terminal inside the Docker WordPress Container
4. Run `sh /var/www/html/wp-config/scripts/install_plugins.sh` - To install default plugins. 
5. Import the website backup file from live or staging environment. Don't forget to set up the right domain names.
# load-balancing-docker
A Load Balancer with docker-compose and nginx.

This test runs 4 docker containers running nginx, 3 of then are nodes with web pages and the last one is the load balancer that each time the page is requested the load balancer delivers one of the nodes.


# Setup 
```
git clone https://github.com/stdioh321/load-balancing-docker.git
cd load-balancing-docker
docker-compose build
```

# Run
```
docker-compose up
```
Open your browser at:

### **http://localhost:8081**

<br>
### **Refresh the page a few times, each time it will load a diferente server.**

Node 1|Node 2 
:---:|:---: 
![Node 1](./docs/screenshots/screenshot_01.png) |![Node 2](./docs/screenshots/screenshot_02.png)

Node 3|  |
:---:|:---: 
![Node 3](./docs/screenshots/screenshot_01.png) |


# Requirements

* [Docker](https://docs.docker.com/engine/install/ubuntu/)

* [Docker Compose](https://docs.docker.com/compose/install/)

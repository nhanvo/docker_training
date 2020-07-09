# Clone from GIT: https://github.com/eriksoderblom/alpine-apache-php

## Build with docker
`docker build -t alpine-apache-php:latest .`

## Build with docker-compose
`docker-compose build`

## Usage with docker

```
docker run --detach --name alpine-apache-php --hostname docker_training.com --publish 8080:80 --restart always --volume ./www:/htdocs alpine-apache-php:latest
```

## Usage with docker-compose

```
docker-compose up -d
```
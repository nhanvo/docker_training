## alpine-apache-php
Alpine based image with apache2 and php7

[![](https://images.microbadger.com/badges/image/eriksoderblom/alpine-apache-php.svg)](https://microbadger.com/images/eriksoderblom/alpine-apache-php)

# Build with docker
`docker build -t alpine-apache-php:latest .`

# Build with docker-compose
`docker-compose build`

# Usage with docker

```
docker run --detach --name alpine-apache-php --hostname docker_training.com --publish 8080:80 --restart always --volume ./www:/htdocs alpine-apache-php:latest
```

# Usage with docker-compose

```
docker-compose up -d
```
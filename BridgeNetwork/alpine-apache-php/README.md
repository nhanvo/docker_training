## alpine-apache-php
Alpine based image with apache2 and php7

[![](https://images.microbadger.com/badges/image/eriksoderblom/alpine-apache-php.svg)](https://microbadger.com/images/eriksoderblom/alpine-apache-php)

# Build
`docker build -t alpine-apache-php:latest .`

# Usage

```
docker run --detach --name alpine-apache-php --hostname docker_training.com --publish 8080:80 --restart always --volume /Users/nhanvo/Desktop/docker_training/BridgeNetwork/www:/htdocs alpine-apache-php:latest
```
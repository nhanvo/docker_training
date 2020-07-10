# Clone form GIT: https://github.com/wangxian/alpine-mysql
# alpine-mysql
a docker image base on alpine with mysql

## build image (docker)
```
docker build -t alpine-mysql:latest .
```
## build image (docker-compose)
```
cp .env-dist .env
nano .env # change environment if you need
docker-compose build
```

## Usage (docker)
```
docker run -it --name alpine-mysql -p 3306:3306 alpine-mysql
```

## Usage (docker-compose)
```
docker-compose up -d
```


It will:
- set no password for 'root' with localhost connections;
- set password for 'root' with non-localhost connections (default is 'root');
- create a new db (default is `hospital_db`);
- create an user and set his password for non-localhost connections only (defaults are `nhanvo` and `nhanvo@123`).
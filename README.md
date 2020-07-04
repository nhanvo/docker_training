1. docker-compose up
-------------------------------------------------------------------
2. docker-compose up -d
Starting composetest_redis_1...
Starting composetest_web_1...

$ docker-compose ps
Name                 Command                     State       Ports
composetest_redis_1   /usr/local/bin/run         Up
composetest_web_1     /bin/sh -c python app.py   Up          5000->5000/tcp
-------------------------------------------------------------------
3. docker-compose run web env
PATH=/usr/local/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
HOSTNAME=3e489aaf959e
TERM=xterm
FLASK_ENV=development
LANG=C.UTF-8
GPG_KEY=0D96DF4D4110E5C43FBFB17F2D347EA6AA65421D
PYTHON_VERSION=3.7.8
PYTHON_PIP_VERSION=20.1.1
PYTHON_GET_PIP_URL=https://github.com/pypa/get-pip/raw/eff16c878c7fd6b688b9b4c4267695cf1a0bf01b/get-pip.py
PYTHON_GET_PIP_SHA256=b3153ec0cf7b7bbf9556932aa37e4981c35dc2a2c501d70d91d2795aa532be79
FLASK_APP=app.py
FLASK_RUN_HOST=0.0.0.0
HOME=/root
-------------------------------------------------------------------
4.docker-compose stop
Stopping composetest_redis_1 ... done
Stopping composetest_web_1   ... done
-------------------------------------------------------------------
5.docker-compose down --volumes
Removing composetest_web_run_20f2704d2173 ... done
Removing composetest_redis_1              ... done
Removing composetest_web_1                ... done
Removing network composetest_default

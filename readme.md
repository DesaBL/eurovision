<p align="center">Simple Eurovision application</p>


## About application
Application is built for test purpose only

### Prerequisites

* [Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/#set-up-the-repository) and if you are linux user follow [these steps](https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user) to be able to run docker without _sudo_ 
* [docker-compose](https://docs.docker.com/compose/install/#install-compose)

### Installing

Pull from master branch

Initialize laradock submodule

```
git submodule update --init --recursive
```

Go to laradock directory

```
cd laradock
```

Copy docker enviornment file and after that find variables: *MYSQL_VERSION* and set it to *5.7* 

```
cp env-example .env
```

Compose nginx and mysql application

```
docker-compose up -d nginx mysql
```

Laravel setup

Copy laravel enviornment file 
```
cp .env.example .env
```

Database connection in .env needs to be updated to following
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=root
DB_PASSWORD=root
```


To check if installing finished successfully, in your browser go to localhost.

If you need to run some command on server, like _artisan_ , use
```
docker-compose exec workspace bash
```

For running phpunit tests after entering the workspace containter use
```
phpunit
```



## Built With

* [Laravel](https://laravel.com) - The PHP framework used for development
* [Laradock](http://laradock.io/) - Used for dockerization



## Author

* **Milan Desancic** - *PHP developer* 

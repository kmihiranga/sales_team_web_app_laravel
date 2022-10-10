## Steps To Setup Sales Team

This is a Laravel and MySQL based project and deployed using Docker environment.

## Usage

### Install docker environment

First you need to setup docker environment using docker setup.

- **[Docker Desktop](https://www.docker.com/products/docker-desktop/)**

Then go to your root level in the folder structure and open your terminal in that directory.

Run these below commands to build docker containers and run the docker containers.

```
docker-compose build && docker-compose up -d
```

### Project Setup

First login to your php docker container using below command.

```
docker exec -it <CONTAINER_NAME> sh
```

then you can see the project files inside docker container.

check if you have properly setup **`.env`** file inside folder structure.

then you need to generate an application key. you can use this command to generate a key inside the container.

```
php artisan key:generate
```

Then we need to setup database. So first check the credentials and database name with **`.env`** file and **`docker-compose.yml`** file.

After properly setup  you need to change **`.env`** file `DB_HOST` as `mysql`. 

Then you can run below command inside the container to migrate all tables into the database.

```
php artisan migrate
```

After migration, you can seed data into the database using below command.

```
php artisan db:seed
```

if you need to refresh the database you can run below command.

```
php artisan migrate:fresh
```

you can route through this url for access sales team details

```
localhost:8091/sales_team
```

### Testing Environment

For testing, you can run below command to check all test cases.

```
./vendor/bin/pest
```
We used pest php test framework for tests.

- **[PEST PHP](https://pestphp.com/)**

## License

Sales Team is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

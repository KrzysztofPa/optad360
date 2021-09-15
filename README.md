# optad360


## Prerequisites

You need install:

- PHP
- Composer
- Symfony
- your faveourite server

##Instalation

1. Clone repository
2. Open project in your favourite editor
3. In console, type:
```
Composer install
```
This command, should install all dependencies.

4. in ".env" file, fill DATABASE_URL with correct values, even with database name, save file
- if you don't have database, in console type 

```
php bin/console doctrine:database:create
```
5. Type in console:
```
 php bin/console make:migration
```
The command will create migration file, next command will put it in Database
```
php bin/console doctrine:migrations:migrate
```
6. Now, run serve, with command
```
symfony serve -d 
```
-d is for run server in background

Now you can communicate with server, by 2 endpoints (propose to use Postman-like app).
#### POST:
{yourLocalHostServer)/post - with JSON in body.
example of JSON:
```
{"settings":{"currency":"EUR","PeriodLength":1,"groupby":""},"headers":["URLs","Tags","DATE","Estimated revenue","Ad impressions","Ad eCPM","CLICKS","Ad CTR"]}
```
#### GET:
{yourLocalHostServer)/get - return JSON object, of all element in database.

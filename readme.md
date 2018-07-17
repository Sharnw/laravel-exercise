# Laravel Exercise (for Dave)

Laravel 5.6.*

## Installation

Copy .env.example to .env and adjust mysql/redis host etc.

### Generate a new app key

``php artisan key:generate``

### Install composer packages:

``composer install``

### Install NPM packages

``npm install``

### Run laravel mixer

``npm run dev``

## Project setup

### Run migrations

``php artisan migrate``

### Seed database

``php artisan db:seed``

### Login

default login is:

```
dave@test.com / test1234
```

# Custom packages used

* tightenco/ziggy (laravel named routes in javascript) - https://github.com/tightenco/ziggy
* laracasts/utilities (for JavaScript utility)

# Assumptions & notes

* We want one contact per email (so email can be unique field)
* We want phone prefix support for internationalisation
* A fix for has been added to config/database.php just incase you want to use mysql8 (still waiting for laravel to patch it)
* Having trouble getting my ziggy routes working, have hard-coded some of the javascript route calls
* Would like to add front-end validation via (vue-validate), validation is all done through StoreContactRequest at the moment


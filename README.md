# CrokeoTest

This is my implementation of the proposed coding test for Crokeo 😄

## Requirements

Running this program requires:

- php
- composer
- npm

## Install

To install all libraries run in the console from the root folder:
```bash
# composer install
# cp .env.example .env
# php artisan key:generate
# npm install
# npm run watch
```


## Tests

You can run the unit tests with:

```bash
# php artisan test 
```


## Run Server

If everything has been installed correctly, all it takes to start the server is the following command:

```bash
# php artisan serve 
```

## Considerations

Due to time constraints some parts of this implementation were left out.

I would take the following measures before shipping this code to production:

- Move data from the constants in `...Data.php` classes to a database such as `MySQL`
- Create tests for `PrescriptionController.php`
- Create tests for `RequestToPetMapper.php`
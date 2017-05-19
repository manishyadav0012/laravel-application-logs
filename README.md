# Laravel Application Logs (Laravel v5.1.* - v5.4.*)
[![PyPI](https://img.shields.io/badge/status-development-red.svg)]() [![PyPI](https://img.shields.io/badge/laravel-(v5.1_v5.4)-green.svg)]()

A laravel module which enables the application to save the logs in the database table instead of files. Logs gets automatically generated & saved into the database 
on occurance of any error(or the severity level saved in the config file).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software

```
composer
```

### Installing

A step by step series of examples that tell you have to get a development environment running

Create a `laravel` application if you don't have already
```
composer create-project --prefer-dist laravel/laravel laravel-logs-demo
```

Update your `.env` file with your database name, user & password
```
DB_DATABASE=YOUR_DATABASE_NAME_HERE
DB_USERNAME=USERNAME
DB_PASSWORD=SECRET
```

Change your `mininum-stability` by adding these lines before `require:{...}` block in `composer.json` file
```
"minimum-stability" : "dev",
"prefer-stable" : true,
```

Get the repository in your application using:

```
composer require manishyadav/laravel-application-logs
```

Add the `LaravelApplicationLogsProvider` in your `config/app.php` providers array

```
Manishyadav\LaravelApplicationLogs\LaravelApplicationLogsProvider::class,
```

### For Laravel version below 5.3
Publish the vendor files:
```
php artisan vendor:publish
```

Add the following code in `bootstrap/app.php` file before `return $app;` line
```
$app->configureMonologUsing(function (\Monolog\Logger $monolog) {
	return (new Manishyadav\LaravelApplicationLogs\ConfigureMonolog())->getLogger($monolog);
});
```

### For all Laravel 5 versions 

Run the database migrations

```
php artisan migrate
```

Now, all the logs will be stored in the `logs` table in your database


## Built With

* [Laravel](https://laravel.com/) - he PHP Framework For Web Artisans
* [Composer](https://getcomposer.org/) - Dependency Manager for PHP

## Authors

* [**Manish Yadav**](https://github.com/manishyadav0012)


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Hat tip to anyone who's code was used


# Laravel Application Logs (Laravel 5.4 Only)

A laravel module which enables the application to save the logs in the database table instead of files. Logs gets automatically generated & saved into the database 
on occurance of any error(or the severity level saved in the config file).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software

```
composer
```

### Installation

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

Add the `LaravelApplicationLogsProvider` in your `config/app.php` providers array

```
Manishyadav\LaravelApplicationLogs\LaravelApplicationLogsProvider::class,
```

Run database migrations

```
php artisan migrate
```

Now, all the logs will be stored in the logs table in your database

### Installing

A step by step series of examples that tell you have to get a development environment running

Get the repository in your application using:

```
composer require manishyadav/laravel-application-logs
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Built With

* [Laravel](https://laravel.com/) - he PHP Framework For Web Artisans
* [Composer](https://getcomposer.org/) - Dependency Manager for PHP

## Authors

* [**Manish Yadav**](https://github.com/manishyadav0012)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Hat tip to anyone who's code was used


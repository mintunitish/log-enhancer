[![Latest Stable Version](https://poser.pugx.org/mintunitish/laravel-log-enhancer/v/stable?format=flat-square)](https://packagist.org/packages/mintunitish/laravel-log-enhancer)
[![Total Downloads](https://poser.pugx.org/mintunitish/laravel-log-enhancer/downloads?format=flat-square)](https://packagist.org/packages/mintunitish/laravel-log-enhancer)
[![License](https://poser.pugx.org/mintunitish/laravel-log-enhancer/license?format=flat-square)](https://packagist.org/packages/mintunitish/laravel-log-enhancer)
[![Monthly Downloads](https://poser.pugx.org/mintunitish/laravel-log-enhancer/d/monthly?format=flat-square)](https://packagist.org/packages/mintunitish/laravel-log-enhancer)
[![Build Status](https://travis-ci.com/mintunitish/log-enhancer.svg?branch=master)](https://travis-ci.com/mintunitish/log-enhancer)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/14fc40ee90574ac38e88e1806f8223b6)](https://www.codacy.com/project/mintu.nitish/log-enhancer/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=awesome-people-inc/log-enhancer&amp;utm_campaign=Badge_Grade_Dashboard)

# Log Enhancer (Laravel 5.6)
Laravel's logging system helps a lot for storing data as well as while troubleshooting some hidden bugs. The data related to the exception automatically gets logged whenever something goes wrong.

Sometimes, we need more than just *stack trace* to debug the issue easily. The things like **request URL**, **request input data**, **session data**, etc. help us hunt down the exact cause quickly. That's what this *plug-and-play* Laravel package offers.



## Requirements

* PHP 7.1.3+
* Laravel 5.6

## Installation

1) Install the package by running this command in your terminal/cmd:
```
composer require mintunitish/laravel-log-enhancer
```

2) Add this package's LogEnhancer class to the tap option of your log channel in **config/logging.php**:
```
'stack' => [
    'driver' => 'stack',
    'tap' => [AwesomePeople\LaravelLogEnhancer\LogEnhancer::class],
    'channels' => ['daily', 'slack'],
],
```

Optionally, you can import config file by running this command in your terminal/cmd:
```
php artisan vendor:publish --tag=laravel-log-enhancer-config
```

It has following configuration settings:
* (bool) log_request_details => Set to *true* if you wish to log request data. [(Reference)](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Processor/WebProcessor.php)

* (bool) log_input_data => Set to *true* if you wish to log user input data

* (bool) log_request_headers => Set to *true* if you wish to log request headers

* (bool) log_session_data => Set to *true* if you wish to log session data

* (bool) log_memory_usage => Set to *true* if you wish to log memory usage. [(Reference)](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Processor/MemoryUsageProcessor.php)

* (bool) log_git_data => Set to *true* if you wish to log git branch and commit details. [(Reference)](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Processor/GitProcessor.php)

* (array) ignore_input_fields => If input data is being sent, you can specify the inputs from the user that should not be logged. for example, password,cc number, etc.

## Authors

* [**Nitish Kumar**](https://github.com/mintunitish)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

* [Laravel](https://laravel.com) Community

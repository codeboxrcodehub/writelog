# Write Log Laravel Package

Simplified logging for laravel application. You can use it for log your message, array, object etc. Sometimes we need to see if the data is coming from the request or database without stopping the execution of the application. we can easily check by this package.

[![Downloads](https://img.shields.io/packagist/dt/codeboxr/writelog)](https://packagist.org/packages/codeboxr/writelog)
[![Starts](https://img.shields.io/packagist/stars/codeboxr/writelog)](https://packagist.org/packages/codeboxr/writelog)

## Requirements

- PHP >=7.2
- Laravel >= 6

## Installation

> composer require codeboxr/writelog

## Usage

```
use Codeboxr\Writelog\Facade\WriteLog

WriteLog::log(['codeboxr','laravel']);
```

or you can simply use our helper methods

```
writelog(['codeboxr','laravel']);
```

If you want to to edit your file path or file name you should publish config file

> php artisan vendor:publish --provider="Codeboxr\Writelog\WriteLogServiceProvider"

after publishing the config you can see it in config/writelog.php then you can customize everything in your ways

```
return [
    
    "directory" => base_path(), // Log Store Directory path
    
    "file_name" => "debug.log" // Log file name
];
```

## Contributing

Contributions to the Writelog package are welcome. Please note the following guidelines before submitting your pull request.

- Follow [PSR-4](http://www.php-fig.org/psr/psr-4/) coding standards.

## License

Writelog is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2022 [Codeboxr](https://codeboxr.com)

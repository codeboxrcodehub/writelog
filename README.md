# Write Log Laravel Package

Simplified logging for laravel application. You can use it for log your message, array, object etc. Sometimes we need to see if the data is coming from the request or database without stopping the execution of the application. we can easily check by this package.

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

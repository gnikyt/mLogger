# mLogger

PHP function for mLogger

[mLogger](http://motionobj.com/mlogger/) - A simple, log server for development

## Installation

The recommended way to install is [through composer](http://packagist.org).

    $ composer require tyler-king/mlogger
    
## Usage

`mLog($message [default: ''], $port [default: 8086);`

PHP >= 5.6

```php
use function TylerKing\mLog;

mLog('Hello!');
```

PHP < 5.6

```php
TylerKing\mLog('Hello!');
```

## Notes

Unit tests provided require mLogger to be running

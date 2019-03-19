About
=====

Simple base exception class providing public and private context inspired by https://github.com/EasyCorp/EasyAdminBundle 

Installation and usage
=====
Installation with composer
-----
```bash
composer require holiz/simple-exception
```

Your exception class:
-----
```php
<?php

use Holicz\Exception\BaseException;
use Holicz\Exception\ExceptionContext;

class MyException extends BaseException
{
    public function __construct(array $parameters = [])
    {
        $exceptionContext = new ExceptionContext(
            'My public message',
            sprintf('My private message with params: %s', $parameters['key']),
            $parameters,
            500 // HTTP status code
        );
    
        parent::__construct($exceptionContext);
    }
}
```

Your code
------
```php
try {
    ...
} catch (MyException $e) {
    // Available methods
    $e->getPublicMessage();
    $e->getDebugMessage();
    $e->getParameters();
    $e->getStatusCode();
}
```

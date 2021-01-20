About
=====

Simple base exception class providing public and private context inspired by https://github.com/EasyCorp/EasyAdminBundle 

Installation and usage
=====
Installation with composer
-----
```bash
composer require holicz/simple-exception
```

Your exception class:
-----
```php
<?php

namespace App\Exception;

use holicz\SimpleException\BaseException;
use holicz\SimpleException\ExceptionContext;

class CouldNotRemoveArticleException extends BaseException
{
    public function __construct(int $id)
    {
        $exceptionContext = new ExceptionContext(
            'There was an error during article removal. Please try again later.',
            sprintf('Could not delete article with id %d', $id),
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
    $e->getPublicMessage(); // Show to user
    $e->getDebugMessage(); // Log
    $e->getStatusCode();
}
```

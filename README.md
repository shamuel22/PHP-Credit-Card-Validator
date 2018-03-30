# PHP-Credit-Card-Validator
Simple credit card validator in php

example:
```php
require_once "cc_validator.php";

$number = '4111111111111111';

echo validatecard($number);

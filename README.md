# 📚 coding-standard


This repository provides a configuration for [friendsofphp/php-cs-fixer](http://github.com/FriendsOfPHP/PHP-CS-Fixer) to check that repositories are following the standards defined by the ownCloud team.


## Installation
```
composer require --dev owncloud/coding-stanfard
```


## Usage

Create a configuration file `.php_cs.dist` in the root of your project:

```
<?php

$config = new OC\CodingStandard\Config();

$config
    ->setUsingCache(true)
    ->getFinder()
    ->in(__DIR__);

return $config;
```

## Versioning

This library follows semantic versioning, additions to the code checks that are "risky" will only be done in major versions

## License

AGPL-3.0
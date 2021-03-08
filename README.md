# PHP Database Cache

[![Latest Version](https://img.shields.io/packagist/v/kiwfy/database-cache-php?style=flat-square&label=Latest%20Version)](https://github.com/kiwfy/database-cache-php/releases)
[![CI Build](https://img.shields.io/circleci/build/github/kiwfy/database-cache-php/master?label=CI%20Build&token=34d8b3820b7229d742897f0a6982ced5bf6a99c8)](https://github.com/kiwfy/database-cache-php)
[![codecov](https://codecov.io/gh/kiwfy/database-cache-php/branch/master/graph/badge.svg?token=O47QIGFACQ&label=Codecov)](https://codecov.io/gh/kiwfy/database-cache-php)
[![Total Downloads](https://img.shields.io/packagist/dt/kiwfy/database-cache-php.svg?style=flat-square&label=Total%20Downloads)](https://packagist.org/packages/kiwfy/database-cache-php)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square&label=PRs%20Welcome)](http://makeapullrequest.com)

PHP library for put all database result in cache

### Installation

Requires [PHP](https://php.net) 7.1

The recommended way to install is through [Composer](https://getcomposer.org/).

```sh
composer require kiwfy/database-cache-php
```

### Sample

it's a good idea to look in the sample folder to understand how it works.

First you need to building a correct environment to install dependences
```sh
docker build -t kiwfy/database-cache-php -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it kiwfy/database-cache-php bash
```

Verify if all dependencies is installed (if need anyelse)
```sh
composer install --no-dev --prefer-dist
```

and run
```sh
php sample/RepositorySample.php
php sample/RepositoryRedisConfigSample.php
```
### Using exists predis connection

You can pass your predis connection if you want in redis attribute.

```php
$repository = new Repository();
$repository->redis = $predisconnection;
```

### Create new predis connection

You can pass your predis connection if you want in redis attribute.

```php
$repository = new Repository();
```

### Configuration throw contruct class

If you want pass different configure use construct class for that.

```php
$defaultConfig = [
    'scheme' => 'tcp',
    'host' => 'localhost',
    'port' => 6379,
];

$redisOptions = [
	'parameters' => [
		'password' => '123456',
	],
];

$repository = new Repository($defaultConfig, $redisOptions);
```

### Development

Want to contribute? Great!

The project using a simple code.
Make a change in your file and be careful with your updates!
**Any new code will only be accepted with all viladations.**

To ensure that the entire project is fine:

First you need to building a correct environment to install/update all dependences
```sh
docker build -t kiwfy/database-cache-php -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it kiwfy/database-cache-php bash
```

Install all dependences
```sh
composer install --dev --prefer-dist
```

Run all validations
```sh
composer check
```

**Kiwfy - Open your code, open your mind!**

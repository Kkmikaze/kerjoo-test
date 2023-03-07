# Kerjoo Test Documentation

## Table Of Content
- [Prerequisite](#prerequisites)
  - [Spesification](#spesification)
- [How To](#how-to)
- [References](#references)
  - [Code style](#code-style)
  - [GIT style](#git-style)


## Prerequisites
What things you need to setup the application:

### Spesification
This application uses PHP version >= 7.4, and several php extensions including:
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## How To
### Running The App
- First get the dependencies Laravel with this command:
```shell
composer install
```

- Copy the `.env.example` to `.env` with run this command:
```shell
cp .env.example .env
```

- for migrate database schema and seed use this command:
```shell
php artisan migrate --seed
```

- and for running the application use this command:
```shell
php artisan serve --port=8000
```

## References
### Code Style
- [PSR-2](https://www.php-fig.org/psr/psr-2/)
- [CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

### GIT Style
For commit message style or git style guide, use this doc
- [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/)
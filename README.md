Custom react WordPress plugin with rest api support and other features.

REST Api respond with json data.

## Installation

- Git clone:
    - `git clone git@github.com:devbaze/stage.git`
- Install javascript dependencies
    - `yarn`
- Install php dependencies
    - `composer install`

## Working With JavaScript

- Build JS/CSS
    - `yarn build`
- Start JS/CSS for development
    - `yarn start`
- Test changed files
    - `yarn test --watch`
- Test all files once
    - `yarn test`
    - `yarn test --ci`


## Working With PHP

### Autoloader

PHP classes should be located in the "php" directory and follow the [PSR-4 standard](https://www.php-fig.org/psr/psr-4/).

The root namespace is `Stage`.



### Tests
- Run unit tests
    - `composer test:unit`
- Run WordPress tests
    - `composer test:wordpress`
    - See local development instructions for how to run with Docker.
- Run unit tests and WordPress tests
    - `composer test`

### Linter

[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) is installed for linting and [automatic code fixing](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Fixing-Errors-Automatically).

- Run linter and autofix
    - `composer fixes`
- Run linter to identify issues.
    - `compose sniffs`


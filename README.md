# PHP Skeleton project

##Introduction
This repository serves as a starting point for any PHP project.
It configures PHP_Codsniffer and PHPUnit.
These tools are accessible via the following commands : 
* `composer style` check style against PSR12 (ignore long lines errors) 
* `composer style-fix` automagically fix style error with phpcbf
* `composer phpunit` run phpunit tests
* `composer phpstan` run phpstan scan
* `composer test` check styles, scan for bugs and unittests in one command

A default `App` namespace is configured in composer. A can be used in the `src/` folder

The goals here is to stay simple as possible to not get in the way of developers customization.

## How to use

1. Clone repository
2. Run `composer install`
3. Configure a vhost to point in `public/` folder.
4. Start building your app in `src/` folder.

## Customise

This project only give you a working environment. Chances are that you need to customize the tools included.

### PHP_CodeSniffer
The default configuration except for line length is used. You'll need to create a phpcs.xml file a the root of the project and modify the composer.json scripts to use it.
See official [documentation](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file) for more info

### PHPUnit
Edit the phpunit.xml file a the root of the project. See official [documentation](https://phpunit.de/manual/6.5/en/appendixes.configuration.html)

### PHPStan
Edit the phpstan.neon file a the root of the project. See official [documentation](https://phpstan.org/config-reference)
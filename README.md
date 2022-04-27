# PHP Skeleton project

##Introduction
This repository serves as a starting point for any PHP project.
It configures PHP_Codsniffer and PHPUnit.
These tools are accessible via the following commands : 
* `composer style` check style against PSR12 (ignore long lines errors) 
* `composer style-fix` automagically fix style error with phpcbf
* `composer phpunit` run phpunit tests
* `composer test` check styles and unittests in one command

A default `App` namespace is configured in composer. A can be used in the `src/` folder

The goals here is to stay simple as possible to not get in the way of developers customization.

## How to use

1. Clone repository
2. Run `composer install`
3. Configure a vhost to point in `public/` folder.
4. Start building your app in `src/` folder.
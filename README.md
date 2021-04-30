# WordPress DecaLog SDK
![Packagist Version](https://img.shields.io/packagist/v/perfopsone/decalog?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/perfopsone/decalog?style=flat-square)
![Packagist License](https://img.shields.io/packagist/l/perfopsone/decalog?style=flat-square)

__WordPress DecaLog SDK__ is a way to use [DecaLog](https://github.com/Pierre-Lannoy/wp-decalog), the free observability toolkit for WordPress, in your own plugins or themes.

You may use this SDK on all WordPress installations: if __DecaLog__ is installed your users will take advantage of all the efforts you've made to report events and provide metrics or traces inside your plugin or theme; if __DecaLog__ is not installed, the SDK will silently discard all these important information...

> ⚠️ This an alpha pre-version. Consider it unstable. Do not use in production: specifications, features and interfaces are subject to changes.

## Deploying WordPress DecaLog SDK

Like __DecaLog__ itself, this SDK is ready to be used in production environments. So you don't have to worry about cleaning up before deployment. In fact, it's a good idea to leave it in production: if the installation target runs __DecaLog__, the users of your plugin or themes will benefit of full observability; if it's not installed, it will be totally invisible to them.

If your plugin or theme is working on the development environment where you've installed __DecaLog__ it will work on all your users' environments - whether __DecaLog__ is installed or not, assuming the following requirements:

- WordPress version: __4.0 or higher__
- PHP version: __5.6 or higher__

_Note: as this SDK is MIT-Licensed, there is no need to worry about leaving it as is in plugins or themes you want to submit to the WordPress directory._

## Installing WordPress DecaLog SDK

Thanks to composer, the installation of the sdk requires one command:

`composer require perfopsone/decalog`

## Using WordPress DecaLog SDK
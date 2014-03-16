Tryd\FileUploader
=====

Version 0.1.0, Copyright (c) 2013 - 2014, [Yassel Avila Gil](http://yasselavila.com/)

## Introduction

File uploader module for ZF2 based applications.

## Requirements

* [PHP 5.4.23](http://php.net/)
* [Zend Framework 2.3.0](http://framework.zend.com/)
* [Tryd\Base 0.2](http://github.com/tryd/zf2-base)
* [Tryd\AssetManager 0.1](http://github.com/tryd/zf2-asset-manager)
* [Tryd\JQuery 0.1](http://github.com/tryd/zf2-jquery)
* [Tryd\I18n 0.1](http://github.com/tryd/zf2-i18n)

## Installation

You can install Tryd\FileUploader manually (not recommended) or using composer. 
For composer documentation, please refer to [getcomposer.org](http://getcomposer.org/).

#### Installation steps

  1. `cd /path/to/my/project`
  2. Create a `composer.json` file with following contents:

     ```json
     {
         "require": {
             "tryd/zf2-file-uploader": ">=0.1"
         }
     }
     ```
  3. Install composer via `curl -s http://getcomposer.org/installer | php` (on windows, download
     http://getcomposer.org/installer and execute it with PHP)
  4. Run `php composer.phar install`
  5. Open `/path/to/my/project/config/application.config.php` and add the following keys to your `modules`:

     ```php
     'Tryd\Base',
     'Tryd\AssetManager',
     'Tryd\I18n',
     'Tryd\FileUploader',
     ```

## License

[New BSD License](http://tryd.net/license/new-bsd)

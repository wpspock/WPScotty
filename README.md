# WP Scotty Boilerplate Theme

## Overview

WP Scotty is a boilerplate framework for a WordPress theme base on WP Spock framework. Unlike WP Bones, which is a framework dedicated to WordPress Plugin, WP Spock is a framework dedicated to WordPress theme. As you know, there is an important difference between Plugin and Theme. You can activate only theme...

## Requirement

### Composer

```shell
$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

### Yarn

```shell
$ brew install yarn
```

## Installation

Download the boilerplate in your theme folder

```shell
$ cd wp-content/themes
$ git clone -b master https://github.com/WPSpock/WPScotty.git <your theme folder>
```

Now run composer

```shell
$ composer install
```

and finally run

```shell
$ php spock
```

and you should see

```shell
 __    __  ___   __                  _
/ / /\ \ \/ _ \ / _\_ __   ___   ___| | __
\ \/  \/ / /_)/ \ \| '_ \ / _ \ / __| |/ /
 \  /\  / ___/  _\ \ |_) | (_) | (__|   <
  \/  \/\/      \__/ .__/ \___/ \___|_|\_\
                   |_|


Spock Version 0.1.0

Usage:

 command [options] [arguments]

Available commands:
 deploy                  Create a deploy version
 optimize                Run composer dump-autoload with -o option
```





## Filesystem Anathomy

Spock make easier the filesystem structure. You won't need to edit the usual files on the root folder. For example, if you need to change the layout for the `404.php` you'll edit `resources/views/errors/404.php`



```txt
- bootstrap            --> DON'T EDIT
- config               --> configuration files  
- public
  + assets             --> you may use this folder to publish your assets
    + js            
- resources
  + views
    + errors
      - 404.php
    + footer
      - index.php
    + header
      - index.php
    + main
      - archive.php
      - comments.php
      - index.php
      - page.php
      - search.php
      - sidebar.php
      - single.php
 + assets
   + js                --> here you'll find some system js already
   + less              --> less watcher
- templates            --> you can use this folder for WordPress templates
- theme
  - 
- vendor
- 404.php              --> DON'T EDIT
- archive.php          --> DON'T EDIT
- comments.php         --> DON'T EDIT
- footer.php           --> DON'T EDIT
- functions.php        --> DON'T EDIT, WP Spock boot
- header.php           --> DON'T EDIT
- index.php            --> DON'T EDIT
- page.php             --> DON'T EDIT
- search.php           --> DON'T EDIT
- sidebar.php          --> DON'T EDIT
- single.php           --> DON'T EDIT

```





## Edit the template

You'll find the template files in `/resources/views`

## Resources

In the `resources` folder you'll find some system files 

* **assets**
  * **less**
* **views**
* wp_footer.php
* wp_head.php

## Theme

In the `theme` folder you may create your controller, service provider and so on.



## Helpers

### Strings

`studly_case`

### Provides

`providers($key)`

Return the instance of provider with `$key`. Same used in config `theme.php`

### WordPress

`the_slug`

Display the slug of post/page.




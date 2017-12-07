# ZURB Foundation Bundle for Symfony2

## Current Version

Foundation v6.1

## Installation

### Add bundle to your composer.json file

``` js
// composer.json

{
    "require": {
		// ...
        "frux/foundation-bundle": "~6.1"
    }
}
```

### Add bundle to your application kernel

``` php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Frux\FoundationBundle\FruxFoundationBundle(),
        // ...
    );
}
```

### Download the bundle using Composer

``` bash
$ php composer.phar update frux/foundation-bundle
```

### Install assets

Given your server's public directory is named "web", install the public vendor resources

``` bash
$ php app/console assets:install web
```

Optionally, use the --symlink attribute to create links rather than copies of the resources 

``` bash
$ php app/console assets:install --symlink web
```

## Usage

Refer to the desired files in your HTML template, e.g.

``` html
<link rel="stylesheet" type="text/css" href="{{ asset('bundles/fruxfoundation/css/foundation.min.css') }}" />
```

The Foundation scripts requires jQuery. 

``` html
<script type="text/javascript" src="{{ asset('bundles/fruxfoundation/js/vendor/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bundles/fruxfoundation/js/vendor/what-input.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bundles/fruxfoundation/js/foundation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bundles/fruxfoundation/js/app.js') }}"></script>
```

If you require the Modernizr build included with Foundation's sample apps, add this below foundation script block:

``` html
<script type="text/javascript" src="{{ asset('bundles/fruxfoundation/js/vendor/modernizr.js') }}"></script>
```

## Licenses

Refer to the source code of the included files for license information

## References

1. http://foundation.zurb.com
2. http://symfony.com

Yii2 boilerplate
================

# Prerequisites

1. PHP >=7
2. [composer](https://getcomposer.org) installed

# Installation
1. Install *globally* `composer-asset-plugin`:
	```bash
	$ composer global require "fxp/composer-asset-plugin"
	```
2. Then run:
	```bash
	$ composer create-project muvo/yii2-boilerplate
	```

# PROFIT!
You can continue to make your best Yii2-application! :)

### Some additional notices about files and directories
 * [`.env`](./.env): In this file you can predefine environment variables for application in format `KEY="SOME VALUE"` _(per one key-value pair in string)_
 * [`app/themes`](./app/themes): In this directory you can place your application's themes _(assets, views, layouts, …)_
    For example, I _recommend_ following structure:
      * `app/themes/admin/assets`: put in this direcory all required assets for your application, like js, css, etc…
      * Add your own asset-bundle:
        1. Create file `app/themes/admin/AssetBundle.php`. That class-file extends a `yii\web\AssetBundle`
        2. In this class you should define a `$sourcePath = '@app/themes/admin/assets'`
        3. Define a your theme-specific `$js` and `$css` properties
        4. Then you can register your asset-bundle in view/layout, like `<?php \app\themes\admin\AssetBundle::register($this) ?>`.
        When your asset-bundle registers in a view, application will **automatically** publish contents of `app/themes/admin/assets`-directory in public `@webroot` and injects JS and CSS scripts in your view(layout)
    * Create directory for layouts and views: `app/themes/admin/views/layouts`
    * Look more information about [Yii theming](http://www.yiiframework.com/doc-2.0/guide-output-theming.html)
* `app\models`: Put there your data-models, for example ActiveRecord models for interact with database
* `app\modules`: There you can place your separate [Yii-modules](http://www.yiiframework.com/doc-2.0/guide-structure-modules.html), like user's panel, admin's panel, etc…
* `lib`: This is arbitrary directory for development separate custom components. Classes to be placed there must be in namespace `MuVO\Yii2`.
    For example, if I want to create `Connector` for `SomeComponent`, I should:
    1. Create file `lib/SomeComponent/Connector.php` with following content:
        ```php
        <?php namespace MuVO\Yii2\SomeComponent;
        
        class Connector
        {
        // some code here
        }
        ```
    2. Now you can call this `Connector` in your project like this:
        ```php
        $connector = new \MuVO\Yii2\SomeComponent\Connector();
        ```

# Credits
If you have a questions or need an advice, you always can contact me. For example, via [Telegram](https://t.me/VladisMus)

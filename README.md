# Simple PHP MVC Framework

I've used the [Nova Framework](https://github.com/nova-framework) for an long time, to build simple and small web applications - but Nova is now to big. So i build a simple, easy and unsecure(?) solution for me. Without awesome autoloading, without awesome special features. Just working for simple and easy web applications or apis.

#### Some points
- namespaces
- templates (change template name in config.php and add a new folder in the **templates** folder)
- Simple MVC
- Core Model builds an mysqli connection (better solution? Just pull an request or write with me!)
- I've started a simple formbuilder (app/Helpers/FormBuilder.php) just for fun

### Install

Download the zip and place the input in any folder. Now set in your config.php all vars and just start programming.

If you use the "Framework" in a subfolder just change the **RewriteBase** in the .htaccess file.

``` php
RewriteEngine On
RewriteBase / # <- HERE!
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```

### Notes

Special thanks to Jack P. for the simple PHP Router [Nanite](https://github.com/nirix/nanite) and your, because you're reading my bad english! :)

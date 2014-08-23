Widget for jGallery script
==========================
http://plugins.jquery.com/jgallery/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist insolita/yii2-jgallery-widget "*"
```

or add

```
"insolita/yii2-jgallery-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?php echo \insolita\jgallery\JGalleryWidget::widget([
            'selector'=>'.gallery',
            'pluginOptions'=>[
                'mode'=>'full-screen',
                'thumbType'=>'image',
                'autostart'=>true,
                'canClose'=>false,
                'backgroundColor'=>'#000',
                'textColor'=>'#fff'
            ]
        ])?>

```

More documentation aboot jGallery http://jgallery.jakubkowalczyk.pl/
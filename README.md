# yii2-device-detect

Yii2 extension for [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) library.

To use it just require this extension in your `composer.json` file:

~~~
"xutl/yii2-device-detect": "1.0.0",
~~~

And then add it to your components configuration in Yii2:

~~~php
'bootstrap' => ['devicedetect'],
'components' => [
    'devicedetect' => [
        'class' => 'xutl\devicedetect\DeviceDetect'
    ],
]
~~~

You can also use it from anywhere in your code, calling Mobile-Detect's API:

~~~php
/*Detect a mobile device*/
\Yii::$app->devicedetect->isMobile();

/*Detect a tablet device*/
\Yii::$app->devicedetect->isTablet();

/*Check all available methods here: http://demo.mobiledetect.net/ */
~~~
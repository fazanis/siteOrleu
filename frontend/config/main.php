<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'admin' => [
            'class' => 'frontend\module\admin\Module',
            'layout' => 'main',
//            'loginUrl' => 'admin',
        ],
        'cabinet' => [
            'class' => 'frontend\module\cabinet\Module',
            'layout' => 'main',
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'upload/photocollectiva', //path to origin images
            'imagesCachePath' => 'upload/photocollectiva/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/upload/photocollectiva/img.jpg', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'class' => 'frontend\components\LangRequest',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',

        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'frontend\components\LangUrlManager',
            'rules' => [
                '/' => 'site/index',
                '<module:admin|cabinet>/<controller:\w+>' => '<module>/<controller>',
                '<controller:\w+>/<action:\w+>/*' => '<controller>/<action>',
                '<url:[-_0-9-a-z]+>/'=>'news/index',
                '<controller:\w+>/<url:[-_0-9-a-z]+>'=>'news/full',
//                '<controller:(news|anons|obyavleniya)>/<url:[-_0-9-a-z]+>' => 'news/full',
//                '<controller:(struktura)>/otdeli/<url:[-_0-9-a-z]+>' => '<controller>/fullpodrazd',
//                '<controller:(struktura)>/kafedri/<url:[-_0-9-a-z]+>' => '<controller>/fullpodrazd',


                '<id:([0-9])+>/images/image-by-item-and-alias' => 'yii2images/images/image-by-item-and-alias',

            ],
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'forceTranslation' => true,
                    'basePath' => '@common/messages',
                ],
            ],
        ],

    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl' => '@web',
                'basePath' => '@webroot',
                'path' => 'upload/content',
                'name' => 'Global'
//                'baseUrl'=>'@static',
//                'basePath'=>'@staticRoot',
//                'path' => 'files',
//                'name' => 'Global'
            ],

//            'watermark' => [
//                'source'         => __DIR__.'/logo.png', // Path to Water mark image
//                'marginRight'    => 5,          // Margin right pixel
//                'marginBottom'   => 5,          // Margin bottom pixel
//                'quality'        => 95,         // JPEG image save quality
//                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
//                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
//                'targetMinPixel' => 200         // Target image minimum pixel size
//            ]
        ],
    ],
    'params' => $params,
];

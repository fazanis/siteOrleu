<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/style.css',
        'css/custom.css',
    ];

    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.js',
        'js/plugins.js',
        'js/jquery.flexslider.js',
        'js/metisMenu.min.js',
        'js/raphael.js',
        'js/raphael.min.js',
    ];

    public $fonts = [
        'fonts/fontawesome-webfont.woff2',
        'fonts/fontawesome-webfont.woff',
        'fonts/FontAwesome.otf  ',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

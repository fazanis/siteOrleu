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

//        'css/bbpress.css',

//        'css/bootstrap.min.css',
//        'css/bootstrap-theme.css',
//        'css/bootstrap-theme.min.css',




    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.js',
        'js/plugins.js',
        'js/jquery.flexslider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

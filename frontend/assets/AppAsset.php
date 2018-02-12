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
        'css/site.css',
        'css/animate.css',
        'css/icomoon.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/flexslider.css',
        'css/pricing.css',
        'css/style.css',
    ];
    public $js = [
        'js/modernizr-2.6.2.min.js',
        'js/respond.min.js',
        'js/jquery.min.js',
        'js/jquery.easing.1.3.js',
        'js/bootstrap.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.stellar.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.countTo.js',
        'js/jquery.magnific-popup.min.js',
        'js/magnific-popup-options.js',
        'js/simplyCountdown.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

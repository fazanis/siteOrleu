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
        'css/main.css',
        'css/core.min.css',
        'css/font_size_switcher.css',
        'css/jquery.bxslider.css',
        'css/jquery.fancybox.css@v=2.1.5.css',
        'css/jquery.fancybox-buttons.css@v=1.0.5.css',
        'css/jquery.fancybox-thumbs.css@v=1.0.7.css',
        'css/jquery.formstyler.css',
        'css/responsive.css',
        'css/style.css',
        'css/style.min.css',
        'css/style.min.css@1502450594490.css',
        'css/template.css',
        'css/template_styles.css',
        'css/vision_switcher.css',
    ];

    public $js = [
        'js/responsive-switch.js',
        'js/jquery.mousewheel-3.0.6.pack.js',
        'js/jquery.fancybox.pack.js@v=2.1.5',
        'js/jquery.fancybox-buttons.js@v=1.0.5',
        'js/jquery.fancybox-media.js@v=1.0.6',
        'js/jquery.fancybox-thumbs.js@v=1.0.7',
        'js/jquery.marquee.min.js',
        'js/init.js',
        'js/jquery.bxslider.min.js',
        'js/jquery.formstyler.js',



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

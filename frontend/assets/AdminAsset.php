<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.02.2018
 * Time: 14:15
 */

namespace frontend\assets;
use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/style.css',
        'css/custom.css',
        'css/animate.min.css',
        'css/custom2.css',
        'css/jquery-jvectormap-2.0.3.css',
        'css/green.css',
        'css/floatexamples.css',
    ];

    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.js',
        'js/plugins.js',
        'js/jquery.flexslider.js',
        'js/metisMenu.min.js',
        'js/raphael.js',
        'js/raphael.min.js',
//        'js/nprogress.js',
        'js/maps/jquery-jvectormap-2.0.3.min.js',
        'js/maps/gdp-data.js',
        'js/maps/jquery-jvectormap-world-mill-en.js',
        'js/maps/jquery-jvectormap-us-aea-en.js',
        'js/pace/pace.min.js',
        'js/skycons/skycons.min.js',
        'js/flot/jquery.flot.js',
        'js/flot/jquery.flot.pie.js',
        'js/flot/jquery.flot.orderBars.js',
        'js/flot/jquery.flot.time.min.js',
        'js/flot/date.js',
        'js/flot/jquery.flot.spline.js',
        'js/flot/jquery.flot.stack.js',
        'js/flot/curvedLines.js',
        'js/flot/jquery.flot.resize.js',
//        'js/gauge/gauge.min.js',
//        'js/gauge/gauge_demo.js',
        'js/progressbar/bootstrap-progressbar.min.js',
        'js/nicescroll/jquery.nicescroll.min.js',
        'js/icheck/icheck.min.js',
        'js/moment/moment.min.js',
        'js/datepicker/daterangepicker.js',
        'js/chartjs/chart.min.js',
        'js/custom.js',
        'js/bootstrap.min.js',
//        'js/gauge_demo.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
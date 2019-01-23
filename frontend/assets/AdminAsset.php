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
        'css_admin/font-awesome.min.css',
        'css_admin/bootstrap.css',
        'css_admin/flexslider.css',
        'css_admin/style.css',
        'css_admin/custom.css',
        'css_admin/animate.min.css',
        'css_admin/custom2.css',
        'css_admin/jquery-jvectormap-2.0.3.css',
        'css_admin/green.css',
        'css_admin/floatexamples.css',
    ];

    public $js = [
        'js_admin/jquery.min.js',
        'js_admin/bootstrap.js',
        'js_admin/plugins.js',
        'js_admin/jquery.flexslider.js',
        'js_admin/metisMenu.min.js',
        'js_admin/raphael.js',
        'js_admin/raphael.min.js',
//        'js/nprogress.js',
        'js_admin/maps/jquery-jvectormap-2.0.3.min.js',
        'js_admin/maps/gdp-data.js',
        'js_admin/maps/jquery-jvectormap-world-mill-en.js',
        'js_admin/maps/jquery-jvectormap-us-aea-en.js',
        'js_admin/pace/pace.min.js',
        'js_admin/skycons/skycons.min.js',
        'js_admin/flot/jquery.flot.js',
        'js_admin/flot/jquery.flot.pie.js',
        'js_admin/flot/jquery.flot.orderBars.js',
        'js_admin/flot/jquery.flot.time.min.js',
        'js_admin/flot/date.js',
        'js_admin/flot/jquery.flot.spline.js',
        'js_admin/flot/jquery.flot.stack.js',
        'js_admin/flot/curvedLines.js',
        'js_admin/flot/jquery.flot.resize.js',
//        'js/gauge/gauge.min.js',
//        'js/gauge/gauge_demo.js',
        'js_admin/progressbar/bootstrap-progressbar.min.js',
        'js_admin/nicescroll/jquery.nicescroll.min.js',
        'js_admin/icheck/icheck.min.js',
        'js_admin/moment/moment.min.js',
        'js_admin/datepicker/daterangepicker.js',
        'js_admin/chartjs/chart.min.js',
        'js_admin/custom.js',
        'js_admin/bootstrap.min.js',
//        'js/gauge_demo.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\WLang;
use frontend\widgets\banners\Banners;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title><?= $this->title = 'Филиал АО НЦПК Орлеу Павлодарской области'; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- TEMPLATE STYLES -->

    <?php $this->head() ?>


</head>

<body>
<?php $this->beginBody() ?>
<?if (!Yii::$app->user->isGuest):?>
    <div style="background: green; padding: 2px 2px 2px 550px;">
        <a href="/admin/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Админ панель</a>
        <a href="/cabinet/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Кабинет</a>
        <a href="/site/logout/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Выход</a>
    </div>
<?endif;?>
<!--<div class="left-menu hidden-sm hidden-md hidden-xs">-->
<!--    <ul class="dm-social">-->
<!--        <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right"-->
<!--                                  title="Facebook">Facebook</a></li>-->
<!--        <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right"-->
<!--                                title="Google+">Google+</a></li>-->
<!--        <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right"-->
<!--                                 title="Twitter">Twitter</a></li>-->
<!--        <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right"-->
<!--                                   title="Pinterest">Pinterest</a></li>-->
<!--        <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right"-->
<!--                                  title="Linkedin">Linkedin</a></li>-->
<!--        <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a>-->
<!--        </li>-->
<!--        <li class="share">-->
<!--            <a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->

<!-- START SITE -->
<div id="wrapper">
    <div class="logo-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <a class="navbar-brand" href="/<?= WLang::getLang() ?>"><img width="100px"
                                                                                 src="<?= Yii::getAlias('@mysite') ?>/images/logoorleu.png"
                                                                                 alt=""></a>
                </div>
                <!-- end col -->
                <div class="col-md-9 col-sm-12">
                    <div style="font-size: 21px;">
                        <? if (WLang::getLang() == 'kz'): ?>
                            «ӨРЛЕУ» БІЛІКТІЛІКТІ АРТТЫРУ ҰЛТТЫҚ ОРТАЛЫҒЫ» АКЦИОНЕРЛІК ҚОҒАМЫНЫҢ ФИЛИАЛЫ «ПАВЛОДАР ОБЛЫСЫ БОЙЫНША ПЕДАГОГИКАЛЫҚ ҚЫЗМЕТКЕРЛЕРДІҢ БІЛІКТІЛІГІН АРТТЫРУ ИНСТИТУТЫ»
                        <? endif; ?>
                        <? if (WLang::getLang() == 'ru'): ?>
                            ФИЛИАЛ АКЦИОНЕРНОГО ОБЩЕСТВА «НАЦИОНАЛЬНЫЙ ЦЕНТР ПОВЫШЕНИЯ КВАЛИФИКАЦИИ «ӨРЛЕУ» «ИНСТИТУТ ПОВЫШЕНИЯ КВАЛИФИКАЦИИ ПЕДАГОГИЧЕСКИХ РАБОТНИКОВ ПО ПАВЛОДАРСКОЙ ОБЛАСТИ»
                        <? endif; ?>
                    </div>
                    <!-- end ads-widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end logo-wrapper -->

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-default yamm">
                <div class="container-full">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                    <?=frontend\widgets\menu\Menu::widget()?>
                    </div>


                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->

    <div class="container sitecontainer bgw">
        <div class="row">
            <div class="col-md-9 col-sm-12">

                <!-- end property-slider -->
                <?= $content ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="ads-widget">

                            </div>
                            <!-- end ads-widget -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- end col -->

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-title">
                        <h4>Мы в социальных сетях</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="social-media-widget m30">
                        <ul class="list-social clearfix">
                            <li class="facebook"><a target="_blank"
                                                    href="https://www.facebook.com/orleu.pavlodar/?ref=bookmarks"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li class="googleplus"><a href="https://plus.google.com/+Orleu-eduKz"><i class="fa fa-google-plus"></i></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCnJDcOFNDKKSDc9irac0oAg/"><i class="fa fa-youtube"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/orleupvl/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end social -->
                </div>

                <div class="widget hidden-xs">
                    <?=Banners::widget()?>
                    <!-- end widget-title -->

                    <div class="ads-widget m30">

                    </div>
                    <!-- end ads-widget -->
                </div>
                <!-- end widget -->





            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->


    <!-- end footer -->

    <div id="sitefooter-wrap">
        <div id="sitefooter" class="container">
            <div id="copyright" class="row">
                <div class="col-md-6 col-sm-12 text-left">
                    <p class="copyright-notice"><span class="fa fa-copyright"></span> 2013 - <?=date('Y')?> <? if (WLang::getLang() == 'kz'): ?>
                            «ӨРЛЕУ» БІЛІКТІЛІКТІ АРТТЫРУ ҰЛТТЫҚ ОРТАЛЫҒЫ» АКЦИОНЕРЛІК ҚОҒАМЫНЫҢ ФИЛИАЛЫ «ПАВЛОДАР ОБЛЫСЫ БОЙЫНША ПЕДАГОГИКАЛЫҚ ҚЫЗМЕТКЕРЛЕРДІҢ БІЛІКТІЛІГІН АРТТЫРУ ИНСТИТУТЫ»
                        <? endif; ?>
                        <? if (WLang::getLang() == 'ru'): ?>
                            ФИЛИАЛ АКЦИОНЕРНОГО ОБЩЕСТВА «НАЦИОНАЛЬНЫЙ ЦЕНТР ПОВЫШЕНИЯ КВАЛИФИКАЦИИ «ӨРЛЕУ» «ИНСТИТУТ ПОВЫШЕНИЯ КВАЛИФИКАЦИИ ПЕДАГОГИЧЕСКИХ РАБОТНИКОВ ПО ПАВЛОДАРСКОЙ ОБЛАСТИ»
                        <? endif; ?></p>

                </div>

                <div class="col-md-6 col-sm-12">
                    <ul class="list-inline text-right">
                        <li><a href="/<?=WLang::getLang()?>">Главная</a></li>
                        <li><a href="/<?=WLang::getLang()?>/site/about">О нас</a></li>
                        <li><a href="<?=WLang::getLang()?>/site/contact">Контакты</a></li>
                        <li><a class="topbutton" href="#">На верх <i class="fa fa-angle-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end wrapper -->
<!-- END SITE -->


<!-- FlexSlider JavaScript
================================================== -->
<?php $this->endBody() ?>
<script>
    $(window).load(function () {
        $('#property-slider .flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 6000,
            animationSpeed: 1300,
            directionNav: true,
            controlNav: false,
            keyboardNav: true
        });
    });
</script>
</body>

</html>
<?php $this->endPage() ?>`
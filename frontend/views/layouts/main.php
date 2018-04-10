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


    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<?php $this->beginBody() ?>
<div class="left-menu hidden-sm hidden-md hidden-xs">
    <ul class="dm-social">
        <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right"
                                  title="Facebook">Facebook</a></li>
        <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right"
                                title="Google+">Google+</a></li>
        <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right"
                                 title="Twitter">Twitter</a></li>
        <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right"
                                   title="Pinterest">Pinterest</a></li>
        <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right"
                                  title="Linkedin">Linkedin</a></li>
        <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a>
        </li>
        <li class="share">
            <a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>
        </li>
    </ul>
</div>

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
                        <?php
                        NavBar::begin([
//                        'brandLabel' => Yii::$app->name,
                            'brandUrl' => Yii::$app->homeUrl . '' . WLang::getLang(),
                            'options' => [
                                'class' => 'nav navbar-nav',
                            ],
                        ]);
                        $menuItems = [
                            ['label' => Yii::t('app', 'Главная'), 'url' => ['/site/index']],
                            ['label' => Yii::t('app', 'Структура'),
                                'url' => ['services/index'],
                                'options' => ['class' => 'dropdown hasmenu open'],
                                'template' => '<a href="{url}" class="url-class">{label}</a>',
                                'items' => [
                                    ['label' => Yii::t('app', 'Руководство'), 'url' => ['struktura/rukovodstvo']],
                                    ['label' => Yii::t('app', 'Отделы'), 'url' => ['struktura/otdeli']],
                                    ['label' => Yii::t('app', 'Кафедры'), 'url' => ['struktura/kafedri/']
                                    ],
                                ]
                            ],
                            ['label' => Yii::t('app', 'Новости'), 'url' => ['/news']],
//                        ['label' => Yii::t('app', 'О нас'), 'url' => ['/site/about']],

                            ['label' => 'Contact', 'url' => ['/site/contact']],
                        ];
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

                        }
                        echo Nav::widget([
                            'options' => ['class' => 'nav navbar-nav'],
                            'items' => $menuItems,
                        ]); ?>
                        <ul class="nav navbar-nav navbar-right searchandbag">
                            <li class="dropdown searchdropdown hasmenu">
                                <?= WLang::widget() ?>
                            </li>
                        </ul>
                        <? NavBar::end();
                        ?>
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
                                <a href="#"><img src="upload/banner_02.jpg" alt="" class="img-responsive"></a>
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
                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end social -->
                </div>

                <div class="widget hidden-xs">
                    <?=Banners::widget()?>
                    <div class="widget-title">
                        <h4><?= Yii::t('app', 'blog_directora') ?></h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="ads-widget m30">
                        <a href="#"><img src="upload/banner_01.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <!-- end ads-widget -->
                </div>
                <!-- end widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Latest Reviews</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="review-posts m30">
                        <div class="post-review">
                            <div class="post-media entry">
                                <a href="single-review.html" title="">
                                    <img src="upload/review_01.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="review-stat">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- end review-stat -->
                                        <div class="hover-title">
                                            <span>Tech Reviews</span>
                                        </div>
                                        <!-- end title -->
                                    </div>
                                    <!-- end magnifier -->
                                </a>
                            </div>
                            <!-- end media -->
                            <div class="post-title">
                                <h3><a href="single-review.html">MyWatch Review - Its work perfect on mobile?</a></h3>
                            </div>
                            <!-- end post-title -->
                        </div>
                        <!-- end post-review -->

                        <hr>

                        <div class="post-review">
                            <div class="post-media entry">
                                <a href="single-review.html" title="">
                                    <img src="upload/review_02.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="review-stat">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- end review-stat -->
                                        <div class="hover-title">
                                            <span>Tech Reviews</span>
                                        </div>
                                        <!-- end title -->
                                    </div>
                                    <!-- end magnifier -->
                                </a>
                            </div>
                            <!-- end media -->
                            <div class="post-title">
                                <h3><a href="single-review.html">Google Street View Coming to Bhutan</a></h3>
                            </div>
                            <!-- end post-title -->
                        </div>
                        <!-- end post-review -->

                        <hr>

                        <div class="post-review">
                            <div class="post-media entry">
                                <a href="single-review.html" title="">
                                    <img src="upload/review_03.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="review-stat">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- end review-stat -->
                                        <div class="hover-title">
                                            <span>Tech Reviews</span>
                                        </div>
                                        <!-- end title -->
                                    </div>
                                    <!-- end magnifier -->
                                </a>
                            </div>
                            <!-- end media -->
                            <div class="post-title">
                                <h3><a href="single-review.html">Mondo, the U.K. banking startup, opens public Beta</a>
                                </h3>
                            </div>
                            <!-- end post-title -->
                        </div>
                        <!-- end post-review -->
                    </div>
                    <!-- end review-posts -->
                </div>
                <!-- end widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>The Interviews</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="mini-widget m30">
                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_01.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="single.html"> Jessica and Martin talking about...</a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>

                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_02.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="single.html"> ShowWP team moved to a new office </a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>

                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_03.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="single.html"> How do web design? If no information</a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>

                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_04.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="single.html"> A good strategy is to create 5 rule </a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>

                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_05.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="single.html"> Google material design, colors</a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>

                        <div class="post clearfix">
                            <div class="mini-widget-thumb">
                                <a href="single.html">
                                    <img alt="" src="upload/mini_widget_06.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="mini-widget-title">
                                <a href="#"> The best desk and office designs for ever!</a>
                                <div class="mini-widget-hr"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end mini-widget -->
                </div>
                <!-- end widget -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Site Links</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="check">
                                <li><a href="#">Homepage</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Get In Touch</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="#">Subscribe</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Deals & Coupons</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Community</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="check">
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Send us a tip!</a></li>
                                <li><a href="#">Add to our database</a></li>
                                <li><a href="#">Write a review</a></li>
                                <li><a href="#">Report site issue</a></li>
                                <li><a href="#">Our Authors</a></li>
                                <li><a href="#">Site Categories</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Profiles</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="sociallinks">
                                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i> Vimeo</a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                                <li><a href="#"><i class="fa fa-maxcdn"></i> MaxCDN</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Subscribe & Newsletter</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="newsletter-widget m30">
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <form class="form-inline" method="post" role="form">
                                <div class="input-group form-group">
                                    <input type="text" name="email" placeholder="Add your email here.." required
                                           class="form-control"/>
                                </div>
                                <input type="submit" value="Subscribe" class="btn btn-primary"/>
                            </form>

                            <hr>
                            <h3>
                                <span>12.441 Members</span>
                                <span>122.000 Articles</span>
                            </h3>

                        </div>
                        <!-- end mini-widget -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <div id="sitefooter-wrap">
        <div id="sitefooter" class="container">
            <div id="copyright" class="row">
                <div class="col-md-6 col-sm-12 text-left">
                    <p class="copyright-notice"><span class="fa fa-copyright"></span> 2016 Techmag. All Rights Reserved.
                        A <a href="#" title="TemplateVisual" target="_blank">TemplateVisual</a> INC.</p>
                    <p class="footer-links"><a href="#" title="Privacy Policy" rel="nofollow">Privacy
                            Policy</a><span>|</span><a href="#" title="Site Disclosure" rel="nofollow">Site Terms &amp;
                            Disclosures</a><span>|</span><a href="#" title="" rel="nofollow" target="_blank">Powered by
                            Bootstrap</a></p>
                </div>

                <div class="col-md-6 col-sm-12">
                    <ul class="list-inline text-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a class="topbutton" href="#">Back to top <i class="fa fa-angle-up"></i></a></li>
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
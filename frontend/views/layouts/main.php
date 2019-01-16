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

    <!-- SITE META -->
    <title><?= $this->title = 'Филиал АО НЦПК Орлеу Павлодарской области'; ?></title>
    <link rel="shortcut icon" href="local/templates/demo/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext"
          rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="<?= $this->title ?>"/>
    <meta name="description" content="<?= $this->title ?>"/>






<!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/noelboss/featherlight/1.7.7/release/featherlight.min.css"
          type="text/css"/>
    <link href="http://cdn.rawgit.com/noelboss/featherlight/1.7.7/release/featherlight.gallery.min.css" type="text/css"
          rel="stylesheet"/>

    <!-- TEMPLATE STYLES -->

    <?php $this->head() ?>


</head>

<body >
<?php $this->beginBody() ?>
<?if (!Yii::$app->user->isGuest):?>
    <div style="background: green; padding: 2px 2px 2px 550px;">
        <a href="/admin/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Админ панель</a>
        <a href="/cabinet/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Кабинет</a>
        <a href="/site/logout/" target="_blank" style="color: rebeccapurple; border: 1px solid white; padding: 2px; background: gainsboro;">Выход</a>
    </div>
<?endif;?>

<div class="container header-section">
    <!-- Header top section -->
    <div class="header-top-wrapper hidden-xs">
        <div class="row">
            <div class="col-lg-5">
                <a class="fancybox" target="_blank" href="http://orleu-edu.kz">
                    <i class="fa fa-globe" aria-hidden="true"></i> АО НЦПК "Өрлеу" </a>
               <?= WLang::widget();?>
            </div>
            <div class="col-lg-7 text-right">



Мы в соц. сетях:

                    <a href="https://www.facebook.com/orleu.pavlodar/?ref=bookmarks" target="_blank">
                       <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
<!--                    <a href="index.html" target="_blank">-->
<!--                        <i class="fa fa-vk" aria-hidden="true"></i>-->
<!--                    </a>-->
                    <a href="https://www.instagram.com/orleu_pavlodar/" target="_blank">
                       <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
<!--                    <a href="index.html" target="_blank">-->
<!--                        <i class="fa fa-twitter" aria-hidden="true"></i>-->
<!--                    </a>-->
                    <a href="https://www.youtube.com/channel/UCnJDcOFNDKKSDc9irac0oAg" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:orleupvl@gmail.com" target="_blank">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </a>




            </div>

        </div>
    </div>
    <!-- end - header top section -->


    <!-- header central section -->
    <div class="header-middle-wrapper">
        <div class="col-lg-6 col-xs-12 header-middle-wrapper-logo">
            <a href="/">
                <div class="hmw-logo-symbol">
                    <img width="111" alt="logo.png"
                         src="<?= Yii::getAlias('@mysite') ?>/images/logoorleu.png" height="111"
                         title="logo">
                </div>

                <div class="hmw-logo-text">
                    <div>

                        <?= $this->title ?>
                    </div>
                </div>
            </a>
        </div>

        <div class="mobile-lang-buttons hidden-lg hidden-md hidden-sm">
            <a href="http://kostanay.gov.kz/kz/" class="lang-button КАЗ">
                КАЗ </a>
            <a href="/" class="lang-button РУС" class="active">
                РУС </a>
            <a href="http://kostanay.gov.kz/en/" class="lang-button ENG">
                ENG </a>
        </div>

        <div class="col-lg-6 header-middle-wrapper-buttons hidden-xs">


            <a href="#">
                <div class="header-cat-banners-wrapper">
                    <div class="header-cat-banners header-cat-banner-1">
                        <div>
                            О нас
                        </div>
                    </div>
                </div>
            </a>


            <a href="#">
                <div class="header-cat-banners-wrapper">
                    <div class="header-cat-banners header-cat-banner-2">
                        <div>
                            BLENDED LEARNING
                        </div>
                    </div>
                </div>
            </a>


            <a href="#">
                <div class="header-cat-banners-wrapper">
                    <div class="header-cat-banners header-cat-banner-3">
                        <div>
                            Контакты
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <!-- end - header central section -->

    <?=frontend\widgets\menu\Menu::widget()?>

    <!-- end - header navigation section -->

    <div class="col-lg-12 header-middle-wrapper-buttons hidden-lg hidden-md hidden-sm">


        <a href="https://dialog.egov.kz/">
            <div class="header-cat-banners-wrapper">
                <div class="header-cat-banners header-cat-banner-1">
                    <div>
                        Блог
                    </div>
                </div>
            </div>
        </a>


        <a href="http://e.kostanay.gov.kz">
            <div class="header-cat-banners-wrapper">
                <div class="header-cat-banners header-cat-banner-2">
                    <div>
                        Государственные услуги
                    </div>
                </div>
            </div>
        </a>


        <a href="http://kostanay.gov.kz/biznes/">
            <div class="header-cat-banners-wrapper">
                <div class="header-cat-banners header-cat-banner-3">
                    <div>
                        Бизнес
                    </div>
                </div>
            </div>
        </a>


        <a href="http://kostanay.gov.kz/state-symbols-kazakhstan/" target="_blank">
            <div class="country-gov-banners c-gov-banner1">
                Государственные <br/> символы Казахстана</span>
            </div>
        </a>

        <a href="http://www.akorda.kz/" target="_blank">
            <div class="country-gov-banners c-gov-banner2">
                Официальный сайт Президента <br/> Республики Казахстан </span>
            </div>
        </a>

        <a href="http://kostanay.gov.kz/message-from-president/" target="_blank">
            <div class="country-gov-banners c-gov-banner3">
                Послание Президента <br/> Республики казахстан </span>
            </div>
        </a>
    </div>
</div>
<!-- end - Header section -->




            <?=$content?>


<!-- end - main content section -->
<!-- col-lg-3 - sidebar panel section -->
<div class="col-lg-3">


    <?=Banners::widget()?>
    <!-- akim block -->
<!--    <div class="sidebar-panel-blocks">-->
<!---->
<!--        <div class="sidebar-block-akim-image"-->
<!--             style="background-image:url('upload/content/news2018/3.jpg');"></div>-->
<!---->
<!--        <div class="sidebar-block-akim-title">-->
<!--            <h2>Мухамбетов Архимед Бегежанович</h2>-->
<!---->
<!--            <p>Аким Костанайской области</p>-->
<!--        </div>-->
<!---->
<!--        <ul class="sidebar-block-akim-menu">-->
<!--            <li>-->
<!--                <a href="https://dialog.egov.kz/blogs/294912/welcome">-->
<!--                    <i class="fa fa-angle-right" aria-hidden="true"></i>-->
<!--                    Блог акима </a>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li>-->
<!--                <a href="http://kostanay.gov.kz/akim-oblasti/biografia.php">-->
<!--                    <i class="fa fa-angle-right" aria-hidden="true"></i>-->
<!--                    Биография </a>-->
<!--            </li>-->
<!---->
<!---->
<!--        </ul>-->
<!---->
<!---->
<!--    </div>-->
    <!-- end - akim block -->


    <!-- side navigation panel -->


    <!-- end - side navigation panel -->


    <!-- banners block -->
<!--    <div class="sidebar-panel-blocks">-->
<!--        <a class="sidebar-banners sidebar-banner-1" href="http://map.investinkostanay.kz/ru">-->
<!--            <div class="sidebar-banners-overlay">-->
<!--                <i class="fa fa-compass" aria-hidden="true"></i>-->
<!--                <p>Инвестиционная <br/> карта</p>-->
<!--            </div>-->
<!--        </a>-->
<!---->
<!--        <a class="sidebar-banners sidebar-banner-2" href="http://kostanay.gov.kz/eksport/index.php">-->
<!--            <div class="sidebar-banners-overlay">-->
<!--                <i class="fa fa-globe" aria-hidden="true"></i>-->
<!--                <p>Экспорт</p>-->
<!--            </div>-->
<!--        </a>-->
<!---->
<!--        <a class="sidebar-banners sidebar-banner-3"-->
<!--           href="http://kostanay.gov.kz/razvitie-msb/index.php">-->
<!--            <div class="sidebar-banners-overlay">-->
<!--                <i class="fa fa-handshake-o" aria-hidden="true"></i>-->
<!--                <p>Развитие <br/> МСБ</p>-->
<!--            </div>-->
<!--        </a>-->
<!---->
<!--        <a class="sidebar-banners sidebar-banner-4"-->
<!--           href="http://kostanay.gov.kz/razvitie-turizma/index.php">-->
<!--            <div class="sidebar-banners-overlay">-->
<!--                <i class="fa fa-plane" aria-hidden="true"></i>-->
<!--                <p>Развитие <br/> туризма</p>-->
<!--            </div>-->
<!--        </a>-->
<!--    </div>-->
    <!-- end - banners block -->


    <!-- photogallery slider block -->


    <div class="sidebar-panel-blocks">
        <div class="sidebar-block-photogallery-title">
            <a href="http://kostanay.gov.kz/photogallery">
                <i class="fa fa-camera-retro" aria-hidden="true"></i>Фотогалерея </a>
        </div>

    </div>


<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('.sidebar-block-photogallery-carousel').owlCarousel({-->
<!--                animateOut: 'fadeOut',-->
<!--                animateIn: 'fadeIn',-->
<!--                loop: true,-->
<!--                autoplay: true,-->
<!--                autoplayHoverPause: true,-->
<!--                autoplayTimeout: 2000,-->
<!--                margin: 0,-->
<!--                nav: true,-->
<!--                items: 1,-->
<!--                navText: [-->
<!--                    "<i class='fa fa-angle-left' aria-hidden='true''></i>",-->
<!--                    "<i class='fa fa-angle-right' aria-hidden='true''></i>"-->
<!--                ]-->
<!--            })-->
<!---->
<!--            $('a.gallery').featherlightGallery({-->
<!--                previousIcon: '«', /* Code that is used as previous icon */-->
<!--                nextIcon: '»', /* Code that is used as next icon */-->
<!--                galleryFadeIn: 100, /* fadeIn speed when slide is loaded */-->
<!--                galleryFadeOut: 300          /* fadeOut speed before slide is loaded */-->
<!--            })-->
<!--        });-->
<!--    </script>-->
    <!-- end - photogallery slider block -->


    <!-- weather block -->

    <!-- end - weather block -->


    <!-- calendar block -->



    <!-- voting block -->


    <!-- voting block -->
</div>
<!-- end - col-lg-3 - sidebar panel section -->
</div>
</div>
</div>
</div>
</div>
</div>




<!-- footer elements / navigation -->
<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-news-section">
                    <div class="news-marquee-wrapper">
                        <div class="news-marquee">


                            <div class="marquee">

                                <a href="http://kostanay.gov.kz/news/news/it-litsey-otkryli-v-kostanae/">
                                    IT-лицей открыли в Костанае </a>


                                <a href="http://kostanay.gov.kz/news/news/48-zhiteley-prigoroda-kostanaya-otmetyat-den-konstitutsii-v-sobstvennykh-kvartirakh/">
                                    48 жителей пригорода Костаная отметят День Конституции в собственных квартирах </a>


                                <a href="http://kostanay.gov.kz/news/news/prezidentskaya-milya/">
                                    Президентская миля </a>


                                <a href="http://kostanay.gov.kz/news/news/uvazhaemye-kostanaytsy31082018/">
                                    Уважаемые костанайцы! </a>


                                <a href="http://kostanay.gov.kz/news/news/bolee-440-narusheniy-pozharnoy-bezopasnosti-vyyavleno-v-torgovykh-obektakh-kostanayskoy-oblasti/">
                                    Более 440 нарушений пожарной безопасности выявлено в торговых объектах Костанайской
                                    области </a>

                            </div>
                        </div>
                    </div>

<!--                    <div class="subscribe-form-wrapper">-->
<!--                        <form enctype="multipart/form-data" action="index.html" method="post">-->
<!--                            <input class="subscribe-form-input" id="sub_value" type="text"-->
<!--                                   onfocus="if(this.value == 'Подписаться на рассылку'){this.value = '';}"-->
<!--                                   onblur="if(this.value == ''){this.value='Подписаться на рассылку';}"-->
<!--                                   value="Подписаться на рассылку">-->
<!--                            <input class="subscribe-form-button" type="button" onclick="Subscribe()"-->
<!--                                   value="Подписаться">-->
<!--                            <div class="subscribe-form-validation" id="form_sub"></div>-->
<!--                        </form>-->
<!---->
<!--                        <a class="nmsf-rss-button" href="http://kostanay.gov.kz/kostanay.rss" title="rss"-->
<!--                           target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>

        <div class="row footer-row">
            <div class="col-lg-4 footer-column footer-menu-links">


                <h3>Статистика</h3>

                <ul>
                    <li>
                        <a href="http://kostanay.gov.kz/information-use/">
                            Использовании информации </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/akim-oblasti/obratnaya-svyaz/">
                            Написать в редакцию </a>
                    </li>
                    <li>
                        <a href="http://blog.kostanay.gov.kz/messages/">
                            Вопрос-ответ </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/official-banner/">
                            Официальный баннер </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 footer-column footer-menu-links">


                <h3>Рубрикатор</h3>

                <ul>
                    <li>
                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/about/">
                            Костанайская область </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/akim-oblasti/akim-oblasti/">
                            Аким области </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/akim-oblasti/struktura-apparata-akima-oblasti/">
                            Структура аппарата </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/gosudarstvennaya-sluzhba/vakansii-kostanaya/">
                            Вакансии аппарата </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/akim-oblasti/gosudarstvennye-zakupki/">
                            Государственные закупки </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 footer-column footer-menu-links">


                <h3>Возможности сайта</h3>

                <ul>
                    <li>
                        <a href="http://kostanay.gov.kz/site-map/">
                            Карта сайта </a>
                    </li>
                    <li>
                        <a href="http://kostanay.gov.kz/kostanay.rss">
                            Подписка на новостную ленту </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-12 footer-column">
                <hr>
            </div>
        </div>

        <div class="row footer-row">
            <div class="col-lg-8 footer-column footer-copyright">
                Зарегистрирован 12 сентября 2008 года <br/> за № KZ-W-08-0000004<br/><br/>
                2015 © <?=$this->title?><br/>
                110000, г. Костанай, пр. Аль-Фараби, 66<br/>
            </div>

            <div class="col-lg-4 footer-column footer-social-icons">
                <a href="index.html" target="_blank">
                    <div class="social-icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
                </a>
                <a href="index.html" target="_blank">
                    <div class="social-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
                </a>
                <a href="index.html" target="_blank">
                    <div class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                </a>
                <a href="mailto:akim@kostanay.gov.kz" target="_blank">
                    <div class="social-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- end - footer elements / navigation -->


<!-- back to top button -->
<a class="scrollup-button" id="toTop" href="index.html#">
    <div>
        <div><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
    </div>
</a>
<!-- end - back to top button -->

<!-- feedback / popup window -->
<div id="add-quest">
    <div class="add-quest-in">
        <div class="add-quest-tit">
            Отправить письмом
        </div>

        <form name="test" method="post" action="index.html" id="form_email">
            <div class="add-quest-one">
                <input type="hidden" value="/" id="url-value">
                <div class="add-quest-inp">
                    <input type="text" value="" id="pop-emeil-value" placeholder="E-mail">
                    <div id="error_email" style="color: red;"></div>
                </div>
            </div>

            <div class="send">
                <input type="button" onclick="SendEmail()" value="Оставить сообщение">
            </div>
        </form>

        <div id="messeg_email" style="color: red;"></div>
    </div>
</div>
<!-- end - feedback / popup window -->


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    var responsiveSwitchBreakpoint = 641;
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="http://cdn.rawgit.com/noelboss/featherlight/1.7.7/release/featherlight.min.js" type="text/javascript"
        charset="utf-8"></script>
<script src="http://cdn.rawgit.com/noelboss/featherlight/1.7.7/release/featherlight.gallery.min.js"
        type="text/javascript" charset="utf-8"></script>



<?php $this->endBody() ?>

<script>
    (function ($) {
        $(function () {
            $('input, select:not(.notchange)').styler();
        });
    })(jQuery);
</script>

<script>
    jQuery(document).ready(function () {
        jQuery(".fancybox").fancybox({
            afterShow: function () {
                if (window.LHEPostForm) var editor = LHEPostForm.getEditor('POST_MESSAGE'), node,
                    handler = LHEPostForm.getHandler('POST_MESSAGE');
                if (editor) {
                    editor.CheckAndReInit('');
                }
            }
        });

//        jQuery("#tabs").tabs();
//        jQuery("#tabs2").tabs();
    });
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-22069225-7', 'auto');
    ga('send', 'pageview');
</script>

</body>

</html>
<?php $this->endPage() ?>
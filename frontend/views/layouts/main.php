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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?$lang = WLang::getLang();?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>Educ<span>.</span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <?php
                            NavBar::begin([
                                'brandLabel' => Yii::$app->name,
                                'brandUrl' => Yii::$app->homeUrl.''.WLang::getLang(),
                                'options' => [
                                    'class' => 'navbar-inverse navbar-fixed-top',
                                ],
                            ]);
                            echo WLang::widget();
                            $menuItems = [
                                ['label' => Yii::t('app', 'Главная'), 'url' => ['/site/index']],
                                ['label' => Yii::t('app', 'О нас'), 'url' => ['/site/about']],
                                ['label' => 'Contact', 'url' => ['/site/contact']],
                            ];
                            if (Yii::$app->user->isGuest) {
                                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

                            } else {
                                $menuItems[] = '<li>'
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . '</li>';
                            }
                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => $menuItems,
                            ]);
                            NavBar::end();
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
                                    <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                    <p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>The Great Aim of Education is not Knowledge, But Action</h1>
                                    <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>We Help You to Learn New Things</h1>
                                    <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>




    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>
    </div>
</div>

<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 fh5co-widget">
                <h3>About Education</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Learning</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Course</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Meetups</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Learn &amp; Grow</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Handbook</a></li>
                    <li><a href="#">Held Desk</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Engage us</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Visual Assistant</a></li>
                    <li><a href="#">System Analysis</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Legal</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Find Designers</a></li>
                    <li><a href="#">Find Developers</a></li>
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>
        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                    <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
                </p>
            </div>
        </div>

    </div>
</footer>
<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

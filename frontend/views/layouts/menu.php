<?
use frontend\widgets\WLang;
?>
<?php
//                        NavBar::begin([
////                        'brandLabel' => Yii::$app->name,
//                            'brandUrl' => Yii::$app->homeUrl . '' . WLang::getLang(),
//                            'options' => [
//                                'class' => 'nav navbar-nav',
//                            ],
//                        ]);
//                        $menuItems = [
//                            ['label' => Yii::t('app', 'Главная'), 'url' => ['/site/index']],
//                            ['label' => Yii::t('app', 'Новости'), 'url' => ['/news']],
//                            ['label' => Yii::t('app', 'Структура'),
//                                'url' => ['services/index'],
//                                'options' => ['class' => 'dropdown hasmenu open'],
//                                'template' => '<a href="{url}" class="url-class">{label}</a>',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'О нас'), 'url' => ['site/about']],
//                                    ['label' => Yii::t('app', 'Руководство'), 'url' => ['struktura/rukovodstvo']],
//                                    ['label' => Yii::t('app', 'Отделы'), 'url' => ['struktura/otdeli']],
//                                    ['label' => Yii::t('app', 'Кафедры'), 'url' => ['struktura/kafedri/']
//                                    ],
//                                ]
//                            ],
//                            ['label' => Yii::t('app', 'Нормативная база'),
//                                'url' => ['services/index'],
//                                'options' => ['class' => 'dropdown hasmenu open'],
//                                'template' => '<a href="{url}" class="url-class">{label}</a>',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'Конституция РК'), 'url' => ['site/about']],
//                                    ['label' => Yii::t('app', 'Законы'), 'url' => ['struktura/rukovodstvo']],
//                                    ['label' => Yii::t('app', 'Постановления'), 'url' => ['struktura/otdeli']],
//                                    ['label' => Yii::t('app', 'Программы'), 'url' => ['struktura/kafedri/']],
//                                ]
//                            ],
//                            ['label' => Yii::t('app', 'Деятельность'),
//                                'url' => ['services/index'],
//                                'options' => ['class' => 'dropdown yamm-fw'],
//                                'template' => '<a href="{url}" class="links-widget">{label}</a>',
//                                'items' => [
//                                    ['label' => Yii::t('app', 'Повышение квалификации'), 'url' => ['site/about']],
//                                    ['label' => Yii::t('app', 'Законы'), 'url' => ['struktura/rukovodstvo']],
//                                    ['label' => Yii::t('app', 'Постановления'), 'url' => ['struktura/otdeli']],
//                                    ['label' => Yii::t('app', 'Программы'), 'url' => ['struktura/kafedri/']
//                                    ],
//                                ]
//                            ],
////                        ['label' => Yii::t('app', 'О нас'), 'url' => ['/site/about']],
//
//                            ['label' =>  Yii::t('app', 'Контакты'), 'url' => ['/site/contact']],
//                        ];
//                        if (Yii::$app->user->isGuest) {
//                            $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
//
//                        }else{
//                            $menuItems[] = ['label' =>  Yii::t('app', 'Выход'), 'url' => ['/site/logout']];
//                        }
//                        echo Nav::widget([
//                            'options' => ['class' => 'nav navbar-nav'],
//                            'items' => $menuItems,
//                        ]); ?>
<ul class="nav navbar-nav navbar-right searchandbag">
    <li class="dropdown searchdropdown hasmenu">
        <?= WLang::widget() ?>
    </li>
</ul>
<!--                        --><?// NavBar::end();?>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class=""><a href="/<?=WLang::getLang()?>"><i class="fa fa-home"></i> <?=Yii::t('app', 'Главная')?></a></li>
        <li class=""><a href="/<?=WLang::getLang()?>/news"><?=Yii::t('app', 'Новости')?></a></li>
        <li class="dropdown hasmenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= Yii::t('app', 'Структура')?> <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/<?=WLang::getLang()?>/site/about"><?=Yii::t('app', 'О нас')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/rukovodstvo"><?=Yii::t('app', 'Руководство')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/otdeli"><?=Yii::t('app', 'Отделы')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/kafedri/"><?=Yii::t('app', 'Кафедры')?></a></li>

            </ul>
        </li>
        <li class="dropdown hasmenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= Yii::t('app', 'Нормативная база')?> <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/<?=WLang::getLang()?>/site/about"><?=Yii::t('app', 'Конституция РК')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/rukovodstvo"><?=Yii::t('app', 'Законы')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/otdeli"><?=Yii::t('app', 'Постановления')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/kafedri/"><?=Yii::t('app', 'Программы')?></a></li>

            </ul>
        </li>
        <li class="dropdown yamm-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=Yii::t('app', 'Деятельность')?> <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <div class="yamm-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4><?=Yii::t('app', 'Повышение квалификации')?></h4>
                                        <hr>
                                    </div><!-- end widget-title -->

                                    <div class="links-widget">
                                        <ul class="check">
                                            <li><a href="index-1.html"><?=Yii::t('app', 'План-график курсов')?></a></li>
                                            <li><a href="index-2.html"><?=Yii::t('app', 'Анкетирование')?></a></li>
                                            <li><a href="index-3.html"><?=Yii::t('app', 'Тестирование')?></a></li>
                                        </ul>
                                    </div><!-- end links -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4><?=Yii::t('app', 'Инновации, эксперимент')?></h4>
                                        <hr>
                                    </div><!-- end widget-title -->
                                    <div class="links-widget">
                                        <ul class="check">
                                            <li><a href="single.html"><?=Yii::t('app', 'Обновление содержания образования: ориентация на будущее')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Функциональная грамотность: территория опережающего развития')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Пилотный проект «Управление качеством образования»')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Корпоративное обучение: от исследования к практике')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Эксперимент')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Инновационный опыт')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', 'Методическая копилка')?></a></li>
                                        </ul>
                                    </div><!-- end links -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4><?=Yii::t('app', 'Конкурсы, конференции')?></h4>
                                        <hr>
                                    </div><!-- end widget-title -->
                                    <div class="links-widget">
                                        <ul class="check">
                                            <li><a href="single.html"><?=Yii::t('app', 'Конкурсы')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', '2018')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', '2017')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', '2016')?></a></li>
                                            <li><a href="single.html"><?=Yii::t('app', '2015')?></a></li>
                                        </ul>
                                    </div><!-- end links -->
                                </div>
                            </div>

                        </div>
                    </div><!-- end ttmenu-content -->
                </li>
            </ul>
        </li>
        <li class="dropdown hasmenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= Yii::t('app', 'Медиатека')?> <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/<?=WLang::getLang()?>/site/about"><?=Yii::t('app', 'Фотогалерея')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/rukovodstvo"><?=Yii::t('app', 'Видеогалерея')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/otdeli"><?=Yii::t('app', 'Персональные выставки')?></a></li>
                <li><a href="/<?=WLang::getLang()?>/struktura/kafedri/"><?=Yii::t('app', 'Музей')?></a></li>

            </ul>
        </li>
        <li><a href="contact.html"><?=Yii::t('app', 'Контакты')?></a></li>
        <?if (Yii::$app->user->isGuest):?>
            <li><a href="/<?=WLang::getLang()?>/site/login/"><?=Yii::t('app', 'Вход')?></a></li>
        <?else:?>
            <li><a href="/site/logout/"><?=Yii::t('app', 'Выход')?></a></li>
        <?endif;?>
    </ul>
    <ul class="nav navbar-nav navbar-right searchandbag">
        <li class="dropdown searchdropdown hasmenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
            <ul class="dropdown-menu show-right">
                <li>
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" placeholder="Search here..." />
                            <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div><!--/.nav-collapse -->
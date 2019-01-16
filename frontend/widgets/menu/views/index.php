<?
use frontend\widgets\WLang;
?>

<div class="header-navigation-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="main-nav hidden-xs">

                <ul>
                    <li>
                        <a href="/<?= WLang::getLang() ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Главная') ?></a>
                    </li>
                    <? foreach ($menuArray as $menu): ?>
                                <? if (!isset($menu['childs'])): ?>
                                    <li><a
                                                href="/<?= WLang::getLang() ?>/<?= $menu['url'] ?>"><?= $menu['name_' . WLang::getLang()] ?></a>
                                    </li>
                                <? else: ?>
                                    <? if ($menu['typemanu'] == 1): ?>
                                        <li class="dropdown hasmenu">
                                            <a ref=""><?= $menu['name_' . WLang::getLang()] ?></a>
                                            <? if (isset($menu['childs'])): ?>
                                                <ul>
                                                    <? foreach ($menu['childs'] as $submenu): ?>
                                                        <li>
                                                            <a href="/<?= WLang::getLang() ?>/<?= $submenu['url'] ?>"><?= $submenu['name_' . WLang::getLang()] ?></a>
                                                        </li>
                                                    <? endforeach; ?>
                                                </ul>
                                            <? endif; ?>
                                        </li>
                                    <? else: ?>
                                        <li class="dropdown yamm-fw">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                               aria-expanded="false"><?= $menu['name_' . WLang::getLang()] ?> <span
                                                        class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="yamm-content">
                                                        <div class="row">
                                                            <? $i = 1; ?>
                                                            <? foreach ($menu['childs'] as $submenu): ?>
                                                                <div class="col-md-3">
                                                                    <div class="widget">
                                                                        <div class="links-widget">
                                                                            <ul class="check">
                                                                                <li><?= $i ?> <a
                                                                                            href="/<?= WLang::getLang() ?>/<?= $submenu['url'] ?>"><?= $submenu['name_' . WLang::getLang()] ?></a>
                                                                                </li>
                                                                                <? $i++; ?>
                                                                            </ul>
                                                                        </div><!-- end links -->
                                                                    </div>
                                                                </div>
                                                            <? endforeach; ?>
                                                        </div>
                                                    </div><!-- end ttmenu-content -->
                                                </li>
                                            </ul>
                                        </li>
                                    <? endif; ?>
                                <? endif; ?>
                            <? endforeach; ?>
                    <li>


            </div>
            <!-- end - main menu - desktop view -->


            <!-- main menu - mobile view - xs -->
            <nav class="navbar navbar-default hidden-lg hidden-md hidden-sm">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="mainNavToggleButton" type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="sr-only">Toggle navigation</span>
                        </button>

                        <div class="mobile-navbar-icons">
                            <a class="fancybox" href="/#inline">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </a>

                            <a href="http://kostanay.gov.kz/search/">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="nav navbar-nav">


                            <li class="dropdown">
                                <a href="javascript:void(100)" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    АДМИНИСТРАЦИЯ </a>
                                <ul class="dropdown-menu">


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/akim-oblasti/">
                                            Аким области </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/polozhenie-apparata/">
                                            Положение аппарата </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/struktura-apparata-akima-oblasti/">
                                            Структура аппарата </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/vakansii/">
                                            Вакансии </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/gosudarstvennaya-sluzhba/index.php">
                                            Государственная служба </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/gosudarstvennye-zakupki/">
                                            Государственные закупки </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/obratnaya-svyaz/">
                                            Обратная связь </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/chasto-zadavaemye-voprosy-faq/">
                                            Часто задаваемые вопросы </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/akim-oblasti/kommissii/">
                                            Консультативно-совещательные органы </a>
                                    </li>


                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="javascript:void(100)" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    КОСТАНАЙСКАЯ ОБЛАСТЬ </a>
                                <ul class="dropdown-menu">


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/about/">
                                            Об области </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/regions/">
                                            Карта области </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/dostoprimechatelnosti">
                                            Достопримечательности </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/vybory/">
                                            Выборы </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/informatsiya-dlya-gostey/index2.php">
                                            Информация для гостей </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/kostanayskaya-oblast/kompyuternaya-gramotnost/">
                                            Цифровая грамотность </a>
                                    </li>


                                </ul>
                            </li>


                            <li>
                                <a href="http://kostanay.gov.kz/investitsii/"
                                   class="root-item">
                                    ИНВЕСТИЦИИ </a>
                            </li>


                            <li>
                                <a href="http://kostanay.gov.kz/pasprt-oblasti/"
                                   class="root-item">
                                    ПАСПОРТ ОБЛАСТИ </a>
                            </li>


                            <li class="dropdown">
                                <a href="javascript:void(100)" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    ЭКОНОМИКА </a>
                                <ul class="dropdown-menu">


                                    <li>
                                        <a href="http://kostanay.gov.kz/byudzhet-oblasti/index.php">
                                            Бюджет области </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/ekonomika/byudzhetnye-programmy/">
                                            Бюджетные программы </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/ekonomika/sotsialnoe-partnerstvo/">
                                            Социальное партнерство </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/ekonomika/khod-ispolneniya-punktov-globalnogo-indeksa-konkurentosposobnosti-vsemirnogo-ekonomicheskogo-foruma">
                                            Исполнение пунктов ГИК ВЭФ </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/programmy-razvitiya-territoriy-/">
                                            Программа развития территорий </a>
                                    </li>


                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="javascript:void(100)" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    АНАЛИТИКА </a>
                                <ul class="dropdown-menu">


                                    <li>
                                        <a href="http://kostanay.gov.kz/analitika/selskoe-khozyaystvo/">
                                            Сельское хозяйство </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/analitika/nedropolzovanie/">
                                            Недропользование </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/analitika/informatsiya-po-svobodnym-moshchnostyam/">
                                            Информация по свободным мощностям </a>
                                    </li>


                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="javascript:void(100)" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    ЗАКОНОДАТЕЛЬСТВО </a>
                                <ul class="dropdown-menu">


                                    <li>
                                        <a href="http://kostanay.gov.kz/npa/zakonodatelstvo/">
                                            Законодательство </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/npa/npa">
                                            НПА </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/npa/proekty-npa">
                                            Проекты НПА </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/npa/obsuzhdenie-proektov-npa/">
                                            Обсуждение проектов НПА </a>
                                    </li>


                                    <li>
                                        <a href="http://kostanay.gov.kz/npa/postanovleniya-akimata-kostanayskoy-oblasti/">
                                            Постановления акимата Костанайской области </a>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end - main menu - mobile view - xs -->
        </div>
    </div>
</div>
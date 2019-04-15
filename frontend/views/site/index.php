<?
use frontend\widgets\WLang;
use frontend\models\Content;
?>
<!-- main slider -->
<div class="container hidden-xs">
    <div class="row">
        <div class="col-lg-12">

            <!-- Слайдер -->


            <div class="slider  " id="idslider">
                <div class="slider-in" style="overflow: hidden; height: 350px;">
                    <div class="bxslider">
                        <?foreach ($newslist as $news):?>
                        <!-- Один слайд -->
                        <div class="slider-one" id="">
                            <div class="slider-one-img"
                                 style="background-image: url(<?=$news->shortImgNews()?>"
                                 width="445)"></div>

                            <div class="slider-one-text">
                                <div class="slider-one-text-in">
                                    <div class="slid-one-data">
                                        <?=$news->dateFomat()?>
                                    </div>

                                    <div class="slid-one-tit">
                                        <a href="#">
                                            <?=$news->{'name_'.WLang::getLang()}?> </a>
                                    </div>

                                    <div class="slid-one-descr">
                                        <?=$news->shortContent()?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Конец Один слайд -->
                        <?endforeach;?>




                    </div>

                    <div class="pager-slid">
                        <a data-slide-index="0" href="/#"></a>
                        <a data-slide-index="1" href="/#"></a>
                        <a data-slide-index="2" href="/#"></a>

                    </div>

                </div>

                <div class="sl-left">
                    <div class="sp-link">
                        <ul>
                            <?foreach ($newslist as $news):?>
                            <li id="bx_3218110189_50998">
                                <a data-slide-index="0"
                                   href="<?=$news->url?>">
                            <span>
                                <div class="slid-data">
                                    <?=$news->dateFomat()?>
                                </div>
                                <?=$news->{'name_'.WLang::getLang()}?>
                            </span>
                                </a>
                            </li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </div>

            </div>


            <!-- Слайдер -->


        </div>
    </div>
</div>
<!-- end - main slider -->


<!-- top / blog statistics -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <div class="stat-blog">
                <div class="stat-tit">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i> Статистика блога
                </div>

                <div class="stat-info">
                    <div class="one-stat-info">
                        <div class="one-stat-tit">
                            195
                        </div>
                        <div class="one-stat-name">
                            Записей
                        </div>
                    </div>

                    <div class="one-stat-info">
                        <div class="one-stat-tit">
                            3226
                        </div>
                        <div class="one-stat-name">
                            Обращений
                        </div>
                    </div>

                    <div class="one-stat-info">
                        <div class="one-stat-tit">
                            140682
                        </div>
                        <div class="one-stat-name">
                            Посетителей
                        </div>
                    </div>

                    <div class="add-blog">
                        <a href="/<?=WLang::getLang()?>/site/zadatvopros/">
                            Написать в блог </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end - top / blog statistics -->


<!-- about Kazakhstan / banner -->
<div class="container hidden-xs">
    <div class="row">
        <div class="col-lg-12">
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
</div>
<!-- end - about Kazakhstan / banner -->




</div>



<!-- main content section -->
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">
            <div class="row">
                <!-- col-lg-9 - content section -->
                <div class="col-lg-9 main-page-news-tabs-section"><!-- Global site tag (gtag.js) - Google Analytics -->

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="/#news-reg" aria-controls="profile" role="tab" data-toggle="tab">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Новости института
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="/#news-kaz" aria-controls="home" role="tab" data-toggle="tab">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> На курсах
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Новости Региона -->
                        <div role="tabpanel" class="tab-pane fade in active" id="news-reg">


                            <div class="row">

                                <div class="col-lg-7">
                                    <?foreach ($newslist as $news):?>
                                    <div class="main-page-news-item">
                                        <a href="/<?=WLang::getLang()?>/news/<?=$news->url?>">
                                            <div class="mpnis-item-overlay"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                            <div class="mpnis-news-item-image"
                                                 style="background: url(<?=$news->shortImgNews()?>)"></div>
                                            <div class="mpnis-news-data"><i class="fa fa-calendar"
                                                                            aria-hidden="true"></i> <?=$news->dateFomat()?>
                                            </div>
                                            <div class="mpnis-news-title">
                                                <?=$news->{'name_'.WLang::getLang()}?>
                                            </div>
                                            <div class="mpnis-news-exerp">
                                                <p style="text-align:justify;">
                                                    <?=$news->shortContent()?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <?endforeach;?>

                                </div>


                                <div class="col-lg-5">
                                    <?$i=0?>
                                    <? foreach ($newsnext as $item):?>
                                    <? $i++;?>
                                    <?if($i>=4):?>
                                    <div class="main-page-noimg-news-item">
                                        <a href="/news/<?=$item->url?>">
                                            <div class="mpnis-ni-news-title">
                                                <?=$item->{'name_'.WLang::getLang()}?>
                                            </div>
                                            <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                               aria-hidden="true"></i>29/08/2018
                                            </div>
                                            <div class="mpnis-ni-news-exerp">
                                                <p style="text-align:justify;">
                                                    В канун Дня Конституции инициативу работников аппарата акима
                                                    Костанайской области поддержали и вышли на старт Президентской мили
                                                    спортсмены – любители бега </p>
                                            </div>
                                        </a>
                                    </div>
                                        <?endif;?>
                                    <?endforeach;?>




                                </div>
                            </div>
                            <div class="full-width-button">
                                <a href="/<?=WLang::getLang()?>/novosti">
                                    Все новости
                                </a>
                            </div>
                        </div>
                        <!-- Конец Новости Региона -->

                        <!-- Новости казахстана -->
                        <div role="tabpanel" class="tab-pane fade" id="news-kaz">
                            <div id="comp_ab3d4b631d5a8556154df05cb3d62b0c">


                                <div class="row">

                                    <div class="col-lg-7">

                                        <div class="main-page-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/obyavlenie-11-06-2018/">
                                                <div class="mpnis-item-overlay"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i></div>
                                                <div class="mpnis-news-item-image"
                                                     style="background-image: url(/upload/content/news2018/0W7A4812.JPG)"></div>
                                                <div class="mpnis-news-data"><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i> 11/06/2018
                                                </div>
                                                <div class="mpnis-news-title">
                                                    Объявление
                                                </div>
                                                <div class="mpnis-news-exerp">
                                                    <p style="text-align:justify;">
                                                        19 июня текущего года Министр энергетики К. А. Бозумбаев
                                                        проведет отчетную встречу перед населением с обеспечением
                                                        видеоконференцсвязи в регионах </p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="main-page-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/glava-minfina-otchitaetsya-o-svoey-deyatelnosti-pered-naseleniem/">
                                                <div class="mpnis-item-overlay"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i></div>
                                                <div class="mpnis-news-item-image"
                                                     style="background: url(upload/iblock/c30/c3076bbfa5493489aa729a255f11cf0c.jpg)"></div>
                                                <div class="mpnis-news-data"><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i> 06/06/2018
                                                </div>
                                                <div class="mpnis-news-title">
                                                    Глава Минфина отчитается о своей деятельности перед населением
                                                </div>
                                                <div class="mpnis-news-exerp">
                                                    <p style="text-align:justify;">
                                                    </p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="main-page-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/vstrecha-s-akimami-oblastey-gorodov-astany-i-almaty/">
                                                <div class="mpnis-item-overlay"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i></div>
                                                <div class="mpnis-news-item-image"
                                                     style="background: url(upload/iblock/bba/bbaf2fcbd01cdeb5d03781dcbe6b108f.jpg)"></div>
                                                <div class="mpnis-news-data"><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i> 09/02/2018
                                                </div>
                                                <div class="mpnis-news-title">
                                                    Встреча с акимами областей, городов Астаны и Алматы
                                                </div>
                                                <div class="mpnis-news-exerp">
                                                    <p style="text-align:justify;">
                                                        В ходе совещания Глава государства обратил внимание акимов
                                                        областей и городов республиканского значения на необходимость
                                                        контроля стабильности цен на продукты питания и регулирования
                                                        тарифов </p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>


                                    <div class="col-lg-5">

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/uchastie-v-torzhestvennom-prieme-po-sluchayu-prazdnovaniya-dnya-nezavisimosti-respubliki-kazakhstan/">
                                                <div class="mpnis-ni-news-title">
                                                    Участие в торжественном приеме по случаю празднования Дня
                                                    Независимости...
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>15/12/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                        Глава государства поздравил присутствующих и весь народ
                                                        Казахстана с национальным праздником - Днем&nbsp;&nbsp;Независимости. </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/vstrecha-s-verkhovnym-muftiem-kazakhstana-serikbaem-kazhy-orazom/">
                                                <div class="mpnis-ni-news-title">
                                                    Встреча с Верховным муфтием Казахстана Серикбаем кажы Оразом
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>13/12/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                        В ходе встречи Глава государства поздравил Серикбая кажы Ораза с
                                                        избранием на должность Верховного муфтия Казахстана. </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/uchastie-v-zasedanii-senata-parlamenta/">
                                                <div class="mpnis-ni-news-title">
                                                    Участие в заседании Сената Парламента
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>11/12/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                        Выступая перед депутатами Сената Парламента, Глава государства
                                                        остановился на процессе модернизации процессуальных основ
                                                        правоохранительной деятельности страны&nbsp;&nbsp;и отметил
                                                        необходимость... </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/poseshchenie-akademii-silovykh-vidov-sporta/">
                                                <div class="mpnis-ni-news-title">
                                                    Посещение Академии силовых видов спорта
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>09/11/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                        Глава государства посетил Академию силовых видов спорта,
                                                        расположенную в юго-восточной части города Костанай. </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/poseshchenie-sportivnogo-kompleksa-tennisnyy-tsentr/">
                                                <div class="mpnis-ni-news-title">
                                                    Посещение спортивного комплекса «Теннисный центр»
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>09/11/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                    </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="main-page-noimg-news-item">
                                            <a href="http://kostanay.gov.kz/news/news/poseshchenie-too-milkh/">
                                                <div class="mpnis-ni-news-title">
                                                    Посещение ТОО «Милх»
                                                </div>
                                                <div class="mpnis-ni-news-data"><i class="fa fa-calendar"
                                                                                   aria-hidden="true"></i>09/11/2017
                                                </div>
                                                <div class="mpnis-ni-news-exerp">
                                                    <p style="text-align:justify;">
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-width-button">
                                <a href=/<?=WLang::getLang()?>/news">
                                    Все новости
                                </a>
                            </div>
                        </div>
                        <!-- Конец Новости казахстана -->
                    </div>

                    <div class="video-gallery-block">


                        <div class="video-block-title">
                            <div class="video-block-title-left">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                Видеогалерея
                            </div>
                            <div class="video-block-title-right">
                                <a href="http://kostanay.gov.kz/videogallery/">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Все Видео </a>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-lg-4">

                                <a class="video-block-item" href="https://www.youtube.com/embed/MNkA4jvsSUA"
                                   data-featherlight="iframe">
                                    <div class="video-block-item-image"
                                         style="background-image: url('/upload/content/news2018/0W7A4812.JPG');"></div>

                                    <div class="video-block-item-overlay">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>


                                    <div class="video-block-item-title">
                                        Қостанайда алғашқы ақпараттық технологиялар лицейі ашылды
                                    </div>

                                </a>

                            </div>


                            <div class="col-lg-4">

                                <a class="video-block-item" href="https://www.youtube.com/embed/YDpVrtKM68Q"
                                   data-featherlight="iframe">
                                    <div class="video-block-item-image"
                                         style="background-image: url('/upload/content/news2018/0W7A4812.JPG');"></div>

                                    <div class="video-block-item-overlay">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>


                                    <div class="video-block-item-title">
                                        «Үздік әдеп жөніндегі уәкіл» республикалық байқауы өтеді
                                    </div>

                                </a>

                            </div>


                            <div class="col-lg-4">

                                <a class="video-block-item" href="https://www.youtube.com/embed/os3m8C7l4v8"
                                   data-featherlight="iframe">
                                    <div class="video-block-item-image"
                                         style="background-image: url('/upload/content/news2018/0W7A4812.JPG');"></div>

                                    <div class="video-block-item-overlay">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>


                                    <div class="video-block-item-title">
                                        Әдептілік стандарты жоғары қоғам жолында: сіз адамдармен және адамдар үшін жұмыс
                                        жасайсыз
                                    </div>

                                </a>

                            </div>


                        </div>
                    </div>
                    <div class="video-gallery-block">
                    </div>

                    <br>



                    <!-- Global site tag (gtag.js) - Google Analytics -->
                    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114214800-1"></script>
                    <script>
                        window.dataLayer = window.dataLayer || [];

                        function gtag() {
                            dataLayer.push(arguments);
                        }

                        gtag('js', new Date());

                        gtag('config', 'UA-114214800-1');
                    </script>

                </div>
                <!-- end - col-lg-9 - content section -->



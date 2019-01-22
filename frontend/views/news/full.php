<?
use frontend\widgets\WLang;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\models\Content;
?>
<!-- main content section -->
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">

            <div class="page">
                <!-- Крошки -->
                <div class="tree">
                    <div class="tree-left">
                        <ul>
                            <li>
                                <a href="<?=\yii\helpers\Url::to('/')?>" title="Главная" itemprop="url">
                                    Главная
                                </a>
                            </li>

                            <li>
                                <a href="/<?=WLang::getLang()?>/<?=Content::getCatUrl($model->cat)?>" title="Новости" itemprop="url">
                                    <?=Content::getCatName($model->cat)?>
                                </a>
                            </li>

                            <li>
                                <a href="/news/regionnews/" title="Новости региона" itemprop="url">
                                    Новости региона
                                </a>
                            </li>
                            <li>
                                <span>Акимы</span>
                                </il></ul>
                    </div>


                </div>

                <!-- Конец Крошки -->


                <h1><?=$model->{'name_'.WLang::getLang()}?></h1>
                <div class="page-in">


                    <div class="row">
                        <!-- col-lg-9 - content section -->
                        <div class="col-lg-9 main-page-news-tabs-section"><div id="comp_c4f65250385be1573f149f58aa32c8dd">


                                <div class="all-news">

                                    <div class="row">

                                    </div>

                                </div>

                                <?=$model->{'content_'.WLang::getLang()}?>

                            </div>


                        </div>
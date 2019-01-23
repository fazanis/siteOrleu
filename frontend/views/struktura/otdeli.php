<?php
/* @var $this yii\web\View */

use frontend\widgets\WLang;
use yii\helpers\Html;
use frontend\models\Ankety;

?>

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


    <h1><?= Yii::t('app', 'Отделы института') ?></h1>
    <div class="page-in">


    <div class="row">
    <!-- col-lg-9 - content section -->
    <div class="col-lg-9 main-page-news-tabs-section"><div id="comp_c4f65250385be1573f149f58aa32c8dd">


            <div class="all-news">

                <div class="row">
                    <div class="col-lg-12 main-page-news-tabs-section"><div class="panel-group akim_a_structure_wrapper" id="main_akim_group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <?php foreach ($model as $item): ?>
                                    <div class="panel-heading akimat_person_heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#main_akim_group" href="#main_akim_acord" aria-expanded="true">
                                            <div class="akimat_person_heading_panel_left">
                                                <?php $img = $item->getImage();?>

                                                <div class="akimat_person_picture">
                                                    <?= Html::img($img->getUrl(), ['alt' => $item->name_ru, 'class' => 'img-responsive']) ?>
                                                </div>
                                            </div>
                                            <div class="akimat_person_heading_panel_right">
                                                <div class="akimat_person_hp_right_cell_wrapper">
                                                    <div class="akimat_person_name">
                                                        <?= $item->{'name_' . WLang::getLang()} ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <div class="akimat_person_hp_right_button">
                                            <a href="/kafedry/<?= \yii\helpers\Url::to($item->url) ?>"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Подробнее </a>
                                        </div>
                                    </div>
                                    <br>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <br>

                    </div>

                </div>

            </div>



        </div>


    </div>

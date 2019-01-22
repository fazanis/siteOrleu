<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<? $this->title = 'Руководство'; ?>
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">

            <div class="page">



                <h1><?=$this->title?></h1>
                <div class="page-in">


                    <div class="row">
                        <!-- col-lg-9 - content section -->
                        <div class="col-lg-9 main-page-news-tabs-section"><div id="comp_c4f65250385be1573f149f58aa32c8dd">


                                <div class="all-news">

                                    <div class="row">

                                    </div>

                                </div>

                                <? foreach ($model as $item): ?>

                                    <?
                                    $img = $item->getImage();
                                    ?>
                                    <center><?= Html::img($img->getUrl(), ['alt' => $item->fio_ru]) ?>
                                        <h3><?= $item->{'dolzhnost_' . \frontend\widgets\WLang::getLang()} ?></h3>
                                        <h1><?= $item->{'fio_' . \frontend\widgets\WLang::getLang()} ?></h1>
                                    </center>
                                    <p><?= $item->{'publikacii_' . \frontend\widgets\WLang::getLang()} ?></p>
                                    <p><b>Телефон:</b> <?= $item->phone ?></p>
                                    <p><b>Email:</b> <?= $item->email ?></p>
                                    <p><b>Кабинет:</b> <?= $item->kabinet ?></p>
                                <? endforeach; ?>

                            </div>


                        </div>


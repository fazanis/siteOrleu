<?php
/* @var $this yii\web\View */

use frontend\widgets\WLang;
use yii\helpers\Html;
use frontend\models\Ankety;

?>
    <h1><?= Yii::t('app', 'Отделы интситута') ?></h1>

<? foreach ($model as $item): ?>
    <div class="authorbox">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="post clearfix">
                    <div class="avatar-author">
                        <a href="otdely/<?= \yii\helpers\Url::to($item->url) ?>">
                            <?
                            $img = $item->getImage();
                            ?>
                            <?= Html::img($img->getUrl(), ['alt' => $item->name_ru, 'class' => 'img-responsive']) ?>
                        </a>
                    </div>
                    <div class="author-title desc">
                        <a href="otdely/<?= \yii\helpers\Url::to($item->url) ?>"><?= $item->{'name_' . WLang::getLang()} ?></a>


                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end authorbox -->
<? endforeach; ?>
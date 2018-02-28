<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<?foreach ($model as $item):?>

    <?
        $img = $item->getImage();
        echo $images = '/yii2images'.substr($img->getUrl(),6);
    ?>
    <?=Html::img($images,['alt'=>$item->fio_ru]) ?>
    <h3><?=$item->{'dolzhnost_'.\frontend\widgets\WLang::getLang()}?></h3>
    <h1><?=$item->{'fio_'.\frontend\widgets\WLang::getLang()}?></h1>
    <p><?=$item->{'publikacii_'.\frontend\widgets\WLang::getLang()}?></p>
    <p><b>Телефон:</b> <?=$item->phone?></p>
    <p><b>Email:</b> <?=$item->email?></p>
    <p><b>Кабинет:</b> <?=$item->kabinet?></p>
<?endforeach;?>

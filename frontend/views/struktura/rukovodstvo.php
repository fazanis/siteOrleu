<?php
/* @var $this yii\web\View */
?>
<?foreach ($model as $item):?>
    <h3><?=$item->{'dolzhnost_'.\frontend\widgets\WLang::getLang()}?></h3>
    <h1><?=$item->{'fio_'.\frontend\widgets\WLang::getLang()}?></h1>
    <p><?=$item->{'publikacii_'.\frontend\widgets\WLang::getLang()}?></p>
    <p><b>Телефон:</b> <?=$item->phone?></p>
    <p><b>Email:</b> <?=$item->email?></p>
    <p><b>Кабинет:</b> <?=$item->kabinet?></p>
<?endforeach;?>

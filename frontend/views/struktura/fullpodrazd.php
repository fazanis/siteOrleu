<?

use frontend\widgets\WLang;
use yii\helpers\Html;

?>
<h1><?= $otdelinfo->{'name_' . WLang::getLang()} ?></h1>
<?= $otdelinfo->{'text_' . WLang::getLang()} ?>
<hr>
<? foreach ($ankety as $anketa): ?>


    <?
    $img = $anketa->getImage();
    ?>

    <div class="job-media row">
        <div class="col-sm-5">
            <?= Html::img($img->getUrl(), ['alt' => $item->fio_ru, 'class' => 'img-responsive']) ?>
        </div>

        <div class="col-sm-7 job-details">
            <h3><?= $anketa->{'fio_' . WLang::getLang()} ?></h3>
            <ul class="">
                <li><strong> Должность :</strong> <?= $anketa->{'dolzhnost_' . WLang::getLang()} ?></li>
                <?if ($anketa->{'stepen_' . WLang::getLang()}!='') :?>
                <li><strong> Ученая степень :</strong> <?= $anketa->{'stepen_' . WLang::getLang()} ?></li>
                <?endif;?>
                <li><strong> Телефон :</strong> <?= $anketa->phone ?></li>
                <li><strong> Email :</strong> <?= $anketa->email ?></li>
                <li><strong> Кабинет №:</strong> <?= $anketa->kabinet ?></li>
            </ul>
        </div>
    </div>
    <?php if ($anketa->{'education_' . WLang::getLang()} != ''): ?>
        <h3><?= Yii::t('app', 'Образование') ?></h3>
        <p><?= $anketa->{'education_' . WLang::getLang()} ?></p>
    <?php endif; ?>
    <?php if ($anketa->{'nagradi_' . WLang::getLang()} != ''): ?>
        <h3><?= Yii::t('app', 'Награды') ?></h3>
        <p><?= $anketa->{'nagradi_' . WLang::getLang()} ?></p>
    <?php endif; ?>
    <?php if ($anketa->{'publikacii_' . WLang::getLang()} != ''): ?>
        <h3><?= Yii::t('app', 'Публикации') ?></h3>
        <p><?= $anketa->{'publikacii_' . WLang::getLang()} ?></p>
    <?php endif; ?>
    <hr>
<?php endforeach; ?>


<?
use frontend\widgets\WLang;
use yii\helpers\Html;
?>
    <h1><?=$otdelinfo->{'name_'.WLang::getLang()}?></h1>
<?=$otdelinfo->{'text_'.WLang::getLang()}?>
<hr>
<?foreach ($ankety as $anketa):?>


    <?
    $img = $anketa->getImage();
    ?>

    <div class="job-media row">
        <div class="col-sm-5">
            <?=Html::img($img->getUrl(),['alt'=>$item->fio_ru,'class'=>'img-responsive']) ?>
        </div>

        <div class="col-sm-7 job-details">
            <h3><?=$anketa->{'fio_'.WLang::getLang()}?></h3>
            <ul class="">
                <li><strong><i class="fa fa-user"></i> Должность :</strong> <?=$anketa->{'dolzhnost_'.WLang::getLang()}?></li>
                <li><strong><i class="fa fa-briefcase"></i> Телефон :</strong> <?=$anketa->phone?></li>
                <li><strong><i class="fa fa-dollar"></i> Email :</strong> <?=$anketa->email?></li>
                <li><strong><i class="fa fa-clock-o"></i> Кабинет №:</strong> <?=$anketa->kabinet?></li>
            </ul>
        </div>
    </div>

    <h3><?=Yii::t('app','Награды')?></h3>
    <p><?=$anketa->{'nagradi_'.WLang::getLang()}?></p>
    <h3><?=Yii::t('app','Публикации')?></h3>
    <p><?=$anketa->{'publikacii_'.WLang::getLang()}?></p>
    <hr>
<?endforeach;?>


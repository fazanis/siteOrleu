<?
use frontend\widgets\WLang;
use yii\helpers\Html;
?>
    <h1><?=$otdelinfo->{'name_'.WLang::getLang()}?></h1>
<?=$otdelinfo->{'text_'.WLang::getLang()}?>

<?foreach ($ankety as $anketa):?>


    <?
    $img = $anketa->getImage();
    ?>
    <?=Html::img($img->getUrl(),['alt'=>$item->fio_ru]) ?>
    <h3><?=$anketa->{'dolzhnost_'.\frontend\widgets\WLang::getLang()}?></h3>
    <h1><?=$anketa->{'fio_'.\frontend\widgets\WLang::getLang()}?></h1>
    <p><?=$anketa->{'publikacii_'.\frontend\widgets\WLang::getLang()}?></p>
    <p><b>Телефон:</b> <?=$anketa->phone?></p>
    <p><b>Email:</b> <?=$anketa->email?></p>
    <p><b>Кабинет:</b> <?=$anketa->kabinet?></p>
<?endforeach;?>


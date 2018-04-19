<?

use yii\helpers\Html;
use yii\helpers\Url;

?>
<? foreach ($banners as $item): ?>

        <div class="post-title">
            <? if ($item['nameonoff'] != 0): ?>
                <h4><b><?= $item['name_' . \frontend\widgets\WLang::getLang()] ?></b></h4>
                <hr>
                <?else:?>
                <br>
            <? endif; ?>

            <?
            $img = $item->getImage();
            ?>

            <a target="_blank" href='<?=$item['url'] ?>'> <?= Html::img($img->getUrl('305x')) ?>
            </a>
            <?=$item['text']?>
        </div>


<? endforeach; ?>

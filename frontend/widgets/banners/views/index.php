<?

use yii\helpers\Html;
use yii\helpers\Url;

?>
<? foreach ($banners as $item): ?>

        <div class="post-title">
            <? if ($item['nameonoff'] != 0): ?>
                <h4><b><?= $item['name_' . \frontend\widgets\WLang::getLang()] ?></b></h4>
            <? endif; ?>
            <hr>
            <?
            $img = $item->getImage();
            ?>

            <a href='<?= Url::to([$item['url']]) ?>'> <?= Html::img($img->getUrl('305x')) ?>
            </a>
            <?=$item['text']?>
        </div>


<? endforeach; ?>

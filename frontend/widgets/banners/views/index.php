<?

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\WLang;

?>
<? foreach ($banners as $item): ?>

        <div class="post-title">
            <? if ($item['nameonoff'] != 0): ?>
                <h4><b><?= $item['name_' . WLang::getLang()] ?></b></h4>
                <hr>
                <?else:?>
                <br>
            <? endif; ?>

            <?
            $img = $item->getImage();
            ?>
            <?if($item['typeurl']==0):?>
            <a target="_blank" href='/<?=WLang::getLang()?>/banner/<?=$item['url'] ?>'> <?= Html::img($img->getUrl('305x')) ?></a>
                <?else:?>
                <a target="_blank" href='<?=$item['url'] ?>'> <?= Html::img($img->getUrl('305x')) ?></a>
                <?endif;?>
            </a>
            <?=$item['text']?>
        </div>


<? endforeach; ?>

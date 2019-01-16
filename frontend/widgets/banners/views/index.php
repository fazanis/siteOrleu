<?

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\WLang;

?>
<div style="margin-top: 30px;">
<? foreach ($banners as $item): ?>

        <div class="post-title">
            <? if ($item['nameonoff'] != 0): ?>
                <h4 style="text-align: center; border:2px solid #283d54; background: #283d54; height: 41px; padding: 10px; color: white; margin-top: 5px"><?= $item['name_' . WLang::getLang()] ?></h4>
                <?else:?>
                <br>
            <? endif; ?>

            <?
            $img = $item->getImage();
            ?>
            <?if($item['typeurl']==0):?>
            <a target="_blank" href='/<?=WLang::getLang()?>/<?=$item['url'] ?>'> <?= Html::img($img->getUrl('260x')) ?></a>
                <?else:?>
                <a target="_blank" href='<?=$item['url'] ?>'> <?= Html::img($img->getUrl('260x')) ?></a>
                <?endif;?>
            </a>
            <?=$item['text']?>
        </div>


<? endforeach; ?>
</div>
<?php
use yii\helpers\Html;
?>

<!--        --><?//= $current->name;?><!-- <span class="show-more-lang">▼</span>-->


        <?php foreach ($langs as $lang):?>

                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>

        <?php endforeach;?>


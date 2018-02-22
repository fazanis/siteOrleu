<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Content */

$this->title = 'Добавление матерала';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

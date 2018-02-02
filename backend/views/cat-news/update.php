<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\catnews */

$this->title = 'Обновить '.$model->name_ru;
$this->params['breadcrumbs'][] = ['label' => 'Catnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catnews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

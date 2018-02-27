<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Catnews */

$this->title = 'Обновление категории';
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

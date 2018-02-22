<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Content */

$this->title = 'Обновление материала: {'.$model->name_ru.'}';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

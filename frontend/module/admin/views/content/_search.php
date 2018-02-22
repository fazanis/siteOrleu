<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\ContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cat') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'content_ru') ?>

    <?= $form->field($model, 'name_kz') ?>

    <?php // echo $form->field($model, 'content_kz') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

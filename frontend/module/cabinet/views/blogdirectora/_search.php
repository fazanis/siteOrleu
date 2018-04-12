<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\module\cabinet\models\BlogdirectoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogdirectora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'question') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'public') ?>

    <?php // echo $form->field($model, 'read') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\BannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_kz') ?>

    <?= $form->field($model, 'nameonoff') ?>

    <?= $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'activate') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

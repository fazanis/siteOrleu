<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\AnketySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ankety-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'otdel_id') ?>

    <?= $form->field($model, 'dolzhnost_ru') ?>

    <?= $form->field($model, 'dolzhnost_kz') ?>

    <?= $form->field($model, 'fio_ru') ?>

    <?php // echo $form->field($model, 'fio_kz') ?>

    <?php // echo $form->field($model, 'nagradi_ru') ?>

    <?php // echo $form->field($model, 'nagradi_kz') ?>

    <?php // echo $form->field($model, 'publikacii_ru') ?>

    <?php // echo $form->field($model, 'publikacii_kz') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'kabinet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

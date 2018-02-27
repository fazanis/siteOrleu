<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Ankety */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ankety-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'otdel_id')->textInput() ?>

    <?= $form->field($model, 'dolzhnost_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dolzhnost_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nagradi_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nagradi_kz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publikacii_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publikacii_kz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabinet')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

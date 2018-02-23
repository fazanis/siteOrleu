<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\module\admin\models\Catnews;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Catnews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catnews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(Catnews::find()->all(), 'id','name_ru'))?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

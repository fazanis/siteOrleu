<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Catnews;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat')->dropDownList(ArrayHelper::map(Catnews::find()->all(), 'id','name_ru')) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_kz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

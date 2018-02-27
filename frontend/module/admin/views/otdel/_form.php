<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\module\admin\models\Otdel;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Otdel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otdel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(['0'=>'Нет родителя', ArrayHelper::map(Otdel::find()->where(['parent_id' => 0])->all(), 'id','name_ru')])?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'text_ru')->textarea() ?>
    <?= $form->field($model, 'text_kz')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

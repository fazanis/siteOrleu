<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameonoff')->dropDownList(['1'=>'Показывать','0'=>'Не показывать']) ?>

    <?= $form->field($model, 'activate')->dropDownList(['1'=>'Включен','0'=>'Выключен'])  ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

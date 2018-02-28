<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Ankety */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ankety-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'otdel_id')->dropDownList([\yii\helpers\ArrayHelper::map(\frontend\module\admin\models\Otdel::find()->all(),'id','name_ru')]) ?>

    <?= $form->field($model, 'dolzhnost_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nagradi_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <?= $form->field($model, 'publikacii_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabinet')->textInput(['maxlength' => true]) ?>

    <h2>Казахский язык</h2>
    <?= $form->field($model, 'fio_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dolzhnost_kz')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'nagradi_kz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <?= $form->field($model, 'publikacii_kz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

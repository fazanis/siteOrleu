<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\module\admin\models\Otdel;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Otdel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otdel-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(['0'=>'Нет родителя', ArrayHelper::map(Otdel::find()->where(['parent_id' => 0])->all(), 'id','name_ru')])?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>
    <?= $form->field($model, 'text_kz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

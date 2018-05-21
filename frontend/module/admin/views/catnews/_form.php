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

    <?= $form->field($model, 'parent_id')->dropDownList(['0' => 'Нет родителя', ArrayHelper::map(Catnews::find()->where(['parent_id' => 0])->all(), 'id', 'name_ru')]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['0' => 'Статья', '1' => 'Блог']) ?>

    <?= $form->field($model, 'sortmenu')->dropDownList([ArrayHelper::map(Catnews::find()->where('parent_id != :parent_id and parent_id = 6', ['parent_id' => 0])->all(), 'id', 'name_ru')]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

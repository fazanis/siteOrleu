<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\catnews */

$this->title = 'Добавление категории';
$this->params['breadcrumbs'][] = ['label' => 'Catnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

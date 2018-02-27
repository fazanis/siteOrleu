<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Ankety */

$this->title = 'Create Ankety';
$this->params['breadcrumbs'][] = ['label' => 'Anketies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ankety-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

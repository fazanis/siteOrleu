<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\module\cabinet\models\Blogdirectora */

$this->title = 'Create Blogdirectora';
$this->params['breadcrumbs'][] = ['label' => 'Blogdirectoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogdirectora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

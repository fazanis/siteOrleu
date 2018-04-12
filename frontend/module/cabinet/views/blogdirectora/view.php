<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\module\cabinet\models\Blogdirectora */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Blogdirectoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogdirectora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('К вопросам', ['/cabinet/blogdirectora/'], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'subject',
            'question:ntext',
            'answer:ntext',
            'public',
            'read',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Otdel */

$this->title = $model->name_ru;
$this->params['breadcrumbs'][] = ['label' => 'Otdels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otdel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('В отделы', ['/admin/otdel/'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <? $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_ru',
            'name_kz',
            'url:url',
            'parent_id',
            'status',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('300x400')}'>",
                'format' => 'html',

            ],
        ],
    ]) ?>

</div>

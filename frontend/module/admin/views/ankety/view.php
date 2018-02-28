<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\module\admin\models\Ankety */

$this->title = $model->fio_ru;
$this->params['breadcrumbs'][] = ['label' => 'Anketies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ankety-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('В анкеты', ['/admin/ankety/'], ['class' => 'btn btn-success']) ?>
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
    <?
        $path = substr($img->getUrl('300x400'), 7, strlen($img->getUrl('300x400')));
        $path = '/yii2images/' . $path;

    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'otdel_id',
            'dolzhnost_ru',
            'dolzhnost_kz',
            'fio_ru',
            'fio_kz',
            'nagradi_ru:ntext',
            'nagradi_kz:ntext',
            'publikacii_ru:ntext',
            'publikacii_kz:ntext',
            'email:email',
            'phone',
            'kabinet',
            [
                'attribute' => 'image',
                'value' => "<img src='{$path}'>",
                'format' => 'html',

            ],
        ],
    ]) ?>

</div>

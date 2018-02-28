<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\module\admin\models\AnketySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкеты коллектива';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ankety-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить Анкету', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'fio_ru',
        [
                'attribute' => 'otdel_id',
                'value' => function($data){
                    return $data->otdel->name_ru;
                }
        ],
            //'otdel_id',
//            'dolzhnost_ru',
//            'dolzhnost_kz',

            //'fio_kz',
            //'nagradi_ru:ntext',
            //'nagradi_kz:ntext',
            //'publikacii_ru:ntext',
            //'publikacii_kz:ntext',
            //'email:email',
            //'phone',
            //'kabinet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

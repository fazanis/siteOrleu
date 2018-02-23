<?php

use yii\helpers\Html;
use yii\grid\GridView;
use leandrogehlen\treegrid\TreeGrid;
use frontend\module\admin\models\Catnews;

/* @var $this yii\web\View */
/* @var $searchModel frontend\module\admin\models\CatnewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории материалов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tree-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--    --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
////            'id',
//            'name_ru',
//            'parent_id',
////            'url:url',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>
    <?=
    TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'id',
        'showOnEmpty' => FALSE,
        'parentColumnName' => 'parent_id',
        'columns' => [

            'name_ru',
            'parent_id',
            'url',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {add}',
                'buttons' => [
                    'add' => function ($url, $model, $key)
                    {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url);
                    },
                ]
            ]
        ]
    ]);
    ?>
</div>

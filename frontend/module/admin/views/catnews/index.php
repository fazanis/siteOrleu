<?php

use yii\helpers\Html;
use yii\grid\GridView;
use leandrogehlen\treegrid\TreeGrid;
use frontend\module\admin\models\Catnews;
use yii\helpers\Url;
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

    <!--    --><? //= GridView::widget([
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

            'id',
            [
                'attribute' => 'name_ru',
                'value' => function ($data) {
                    return $data->parent_id == 0 ? $data->name_ru : ' -- ' . $data->name_ru;
                }
            ],
            'name_kz',
            [
                'attribute' => 'parent_id',
                'value' => function ($data) {

                    return $data->category->name_ru ? $data->category->name_ru :
                        ' ';


                }
            ],
            'url',
            [
                    'attribute' => 'type',
                'value' => function($data){
                    return $data->type == 0 ? 'Статья' : 'Блог';
                }
            ],
            [
                    'attribute' => 'sortmenu',
                'value' => function($data){
                    return $data->parent_id ?  $data->sortmenu : '<b style = "color:red;">'.$data->sortmenu.'</b>';
                },
                 'format' => 'raw',
            ],
            [
                'value' => function (Catnews $data) {
                    return Html::a('Редактировать', Url::to(['update', 'id' => $data->id]));

                },
                'format' => 'raw',
            ],


//            ['class' => 'yii\grid\ActionColumn',
//                'template' => '{view} {update} {delete}',
//            ]
        ]
    ]);
    ?>
</div>

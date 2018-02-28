<?php

use yii\helpers\Html;
use yii\grid\GridView;
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel frontend\module\admin\models\OtdelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отделы института';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otdel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить отдел', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'id',
        'showOnEmpty' => FALSE,
        'parentColumnName' => 'parent_id',
        'columns' => [

//            'name_ru',
            [
                'attribute' =>'name_ru',
                'value' => function($data){
                    return $data->parent_id == 0 ? $data->name_ru : '--'.$data->name_ru;
                }
            ],
//            'parent_id',
            [
                'attribute'=>'parent_id',
                'value' => function($data){

                    return $data->parent_id == 0 ? 'Нет продителя' : $data->otdel->name_ru;


                }
            ],
            'url',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
            ]
        ]
    ]);
    ?>
</div>

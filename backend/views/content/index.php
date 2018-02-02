<?php


use yii\helpers\Html;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchContent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить новосоть', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
           // 'cat',
            [
                'attribute'=>'cat',
                'value' => function($data){
                    return \backend\models\Catnews::getOneCat($data->cat);
                }
            ],
            'name_ru',
            //'content_ru:ntext',
            'name_kz',
            //'content_kz:ntext',
            //'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?
use frontend\module\cabinet\models\Blogdirectora;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="row tile_count" style="height: 125px;">
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-user"></i> Всего заданных вопросов</span>
            <div class="count"><?=Blogdirectora::getAllQuestionCount()?></div>
            <!--            <span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
        </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-user"></i> Отвеченных</span>
            <div class="count green"><?=Blogdirectora::getNotAnswerQuestionCount()?></div>
            <!--            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
        </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-clock-o"></i> Неотвеченных</span>
            <div class="count"><?=Blogdirectora::getAnswerQuestionCount()?></div>
            <!--            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
        </div>
    </div>
</div>

<div class="blogdirectora-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--        --><?//= Html::a('Create Blogdirectora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',

            'email:email',
            'subject',
            'question:ntext',
            //'answer:ntext',
            //'public',
            //'read',
            [
                'attribute'=>'',
                'content'=>  function($data){
                $data->answer==''? $but='<span style="color:red">Ответить</span>' : $but='<span style="color:blue">Отвечен</span>';
                    return Html::a($but,['/cabinet/blogdirectora/update', 'id' => $data->getLinkFromQuestion()]);
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '',
            ],
        ],
    ]); ?>
</div>

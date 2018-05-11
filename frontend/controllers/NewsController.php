<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2018
 * Time: 23:16
 */

namespace frontend\controllers;


use frontend\models\Catnews;
use Yii;
use frontend\models\Content;
use yii\data\Pagination;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex($url)
    {
        $cat = Catnews::findOne(['url'=>$url]);
//        echo $cat->id;
        $post = Content::findOne(['cat' => $cat->id]);

        $model = Content::find()->where(['cat' => $cat->id,'status' => 1]);
        $pages = new Pagination(['totalCount' => $model->count(),'pageSize' => Yii::$app->params['paginationSize']]);
        $posts = $model->offset($pages->offset)
            ->where(['cat' => $cat->id,'status' => 1])
            ->orderBy('id DESC')
            ->limit($pages->limit)
            ->all();

//        $model = Content::find()->where(['cat' => $cat->id,'status' => 1])->orderBy('id DESC')->all();
        return $this->render('index',
        [
            'model'=>$posts,
            'cat' => $cat,
            'post' => $post,
            'pages' => $pages
        ]);
    }

    public function actionFull($url)
    {
        $model = Content::findOne(['url' => $url]);
        $model->updateCounters(['views' => 1]);

        return $this->render('full', [
            'model' => $model,
        ]);
    }


}
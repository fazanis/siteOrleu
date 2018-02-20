<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2018
 * Time: 23:16
 */

namespace frontend\controllers;


//use backend\models\Content;
use frontend\models\Content;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $model = Content::find()->where(['cat' => 1,'status' => 1])->orderBy('id DESC')->all();
        return $this->render('index',
        [
            'model'=>$model
        ]);
    }

    public function actionFull($url)
    {
        $model = Content::findOne(['url'=>$url]);
        $model->updateCounters(['views' => 1]);
        return $this->render('full',[
            'model'=>$model,
        ]);
    }


}
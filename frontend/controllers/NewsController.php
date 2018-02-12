<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2018
 * Time: 23:16
 */

namespace frontend\controllers;


use backend\models\Content;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionFull($url)
    {

        $model = Content::findOne(['url'=>$url]);
        return $this->render('full',[
            'model'=>$model,
        ]);
    }


}
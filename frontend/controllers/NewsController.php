<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2018
 * Time: 23:16
 */

namespace frontend\controllers;


use yii\web\Controller;

class NewsController extends Controller
{

    public function actionFull($url)
    {
        return $this->render('full',[
            'url'=>$url,
        ]);
    }
}
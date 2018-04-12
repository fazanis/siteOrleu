<?php

namespace frontend\module\cabinet\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `cabinet` module
 */
class DefaultController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//        var_dump(Yii::$app->user->can('createPost'));die;
        var_dump('sdfsdf');die;
        return $this->render('index');
    }

}

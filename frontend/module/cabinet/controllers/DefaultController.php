<?php

namespace frontend\module\cabinet\controllers;

use common\models\User;
use frontend\module\cabinet\Module;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `cabinet` module
 */
class DefaultController extends Controller
{
    const USER_ADMIN = 1;
    const USER_MANAGER = 3;

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {


            return $this->render('index');

    }



}

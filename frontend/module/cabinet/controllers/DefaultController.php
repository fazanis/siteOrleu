<?php

namespace frontend\module\cabinet\controllers;

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
        return $this->render('index');
    }

}

<?php

namespace frontend\module\admin\controllers;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends AdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = "main";

    public function actionIndex()
    {

        return $this->render('index');
    }
}

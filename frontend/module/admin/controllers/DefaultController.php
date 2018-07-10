<?php

namespace frontend\module\admin\controllers;

use frontend\module\admin\controllers\behaviors\AdminBehavators;
use common\models\User;
use frontend\module\admin\models\Content;

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
    public function behaviors()
    {
        return [
            AdminBehavators::className(),
        ];
    }

    public function actionIndex()
    {

        $content = new Content();
        $news = $content->getLastContent();
        return $this->render('index',
            [
                'news'=>$news,
            ]);
    }

}

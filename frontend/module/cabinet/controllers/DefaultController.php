<?php

namespace frontend\module\cabinet\controllers;

use common\models\User;
use frontend\module\cabinet\Module;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\module\cabinet\models\BlogdirectoraSearch;

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

        $searchModel = new BlogdirectoraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);


    }



}

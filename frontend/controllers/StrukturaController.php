<?php

namespace frontend\controllers;

use frontend\models\Ankety;

class StrukturaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionKafedri()
    {
        return $this->render('kafedri');
    }

    public function actionOtdeli()
    {
        return $this->render('otdeli');
    }

    public function actionRukovodstvo()
    {

        $model = Ankety::find()->where(['otdel_id'=>1])->all();

        return $this->render('rukovodstvo',
            [
                'model' => $model,
            ]);
    }

}

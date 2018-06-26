<?php

namespace frontend\controllers;

use frontend\models\Ankety;
use frontend\module\admin\models\Otdel;

class StrukturaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionKafedri()
    {
        $model = Otdel::find()->where(['parent_id' => '3'])->all();
        return $this->render('kafedri',
            [
                'model' => $model,
            ]);
    }

    public function actionOtdeli()
    {
        $model = Otdel::find()->where(['parent_id' => '2'])->all();
        return $this->render('otdeli',
            [
                'model' => $model,
            ]);
    }

    public function actionRukovodstvo()
    {

        $model = Ankety::find()->where(['otdel_id' => 1])->all();

        return $this->render('rukovodstvo',
            [
                'model' => $model,
            ]);
    }

    public function actionFullpodrazd($url)
    {

        $url = \Yii::$app->request->get('url');

        $otdelinfo = Otdel::findOne(['url' => $url]);

        $ankety = Ankety::find()->where(['otdel_id' => $otdelinfo->id])->all();

        return $this->render('fullpodrazd',
            [
                'otdelinfo' => $otdelinfo,
                'ankety' => $ankety,
            ]);
    }

}

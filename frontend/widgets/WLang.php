<?php
namespace frontend\widgets;
use Yii;
use frontend\models\Lang;

class WLang extends \yii\bootstrap\Widget
{
    public function init(){}

    public function run() {
        return $this->render('lang/view', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all(),
        ]);
    }

    public static function getLang(){
       $url = Yii::$app->language;
        $result = substr($url, 0, 2);
        return $result;
    }
}
<?php

namespace frontend\module\admin\controllers\behaviors;

use yii\base\Behavior;
use common\models\User;
use yii\base\Controller;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.04.2018
 * Time: 16:46
 */

class AdminBehavators extends Behavior
{

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'getAdmin'
        ];
    }

    public function getAdmin(){
        if(!User::getRoleToAdmin()){
            return \Yii::$app->controller->redirect(['/cabinet/']);
        }
    }
}
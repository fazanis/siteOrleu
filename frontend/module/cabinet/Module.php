<?php

namespace frontend\module\cabinet;
use Yii;
use yii\filters\AccessControl;
/**
 * cabinet module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\module\cabinet\controllers';

    public function behaviors()
    {
        return[
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]

                ]
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }


}

<?php

namespace frontend\module\admin\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "catnews".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property string $url
 */
class Catnews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [

            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name_ru',
                'slugAttribute' => 'url',
            ],
        ];
    }

    public static function tableName()
    {
        return 'catnews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['name_ru', 'name_kz', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Название на русском',
            'name_kz' => 'Назавание на казахском',
            'url' => 'Url',
        ];
    }
}

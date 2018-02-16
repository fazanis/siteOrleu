<?php

namespace frontend\module\admin\models;

use Yii;

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
            'name_ru' => 'Name Ru',
            'name_kz' => 'Name Kz',
            'url' => 'Url',
        ];
    }
}

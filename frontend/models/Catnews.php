<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catnews".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property string $url
 * @property int $parent_id
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
            [['parent_id','sortmenu','typemanu'], 'integer'],
            [['name_ru', 'name_kz', 'url'], 'string', 'max' => 255],
            [['url'], 'unique'],
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
            'parent_id' => 'Parent ID',
        ];
    }
}

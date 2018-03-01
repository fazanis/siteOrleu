<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "otdel".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property string $url
 * @property int $parent_id
 * @property int $status
 * @property int $sort
 * @property string $text_ru
 * @property string $text_kz
 */
class Otdel extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otdel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'status', 'sort'], 'integer'],
            [['text_ru', 'text_kz'], 'string'],
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
            'parent_id' => 'Parent ID',
            'status' => 'Status',
            'sort' => 'Sort',
            'text_ru' => 'Text Ru',
            'text_kz' => 'Text Kz',
        ];
    }
}

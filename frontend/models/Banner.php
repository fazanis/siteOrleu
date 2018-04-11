<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property int $nameonoff
 * @property int $position
 * @property string $text
 * @property string $url
 * @property int $activate
 * @property int $sort
 */
class Banner extends \yii\db\ActiveRecord
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
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameonoff', 'position', 'activate', 'sort'], 'integer'],
            [['text'], 'string'],
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
            'nameonoff' => 'Nameonoff',
            'position' => 'Position',
            'text' => 'Text',
            'url' => 'Url',
            'activate' => 'Activate',
            'sort' => 'Sort',
        ];
    }


}

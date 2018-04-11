<?php

namespace frontend\module\admin\models;

use Yii;

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
    public $image;
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
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' =>'Название на русском',
            'name_kz' => 'Название на казахском',
            'nameonoff' => 'Показывать название',
            'position' => 'Позиция',
            'image' => 'Фото',
            'text' => 'Текст',
            'url' => 'Url',
            'activate' => 'Активный',
            'sort' => 'Сортировка',
        ];
    }

    public function upload()
    {
        if($this->validate()){
            $path = 'upload/banners/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}

<?php

namespace frontend\module\admin\models;

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
 */
class Otdel extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'url',
                'attribute' => 'name_ru',
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
                // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general.
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ]
        ];
    }

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
            [['parent_id', 'status'], 'integer'],
            [['name_ru', 'name_kz', 'url'], 'string', 'max' => 255],
            [['text_ru','text_kz'],'string'],
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
            'name_kz' => 'Название на казахском',
            'url' => 'Url',
            'parent_id' => 'Родитель',
            'status' => 'Статус',
        ];
    }

    public function getOtdel()
    {
        return $this->hasOne(Otdel::className(),['id' => 'parent_id']);
    }

    public function upload()
    {
        if($this->validate()){
            $path = 'upload/photocollectiva/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}

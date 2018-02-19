<?php

namespace frontend\module\admin\models;

use backend\models\Translit;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property int $cat
 * @property string $name_ru
 * @property string $content_ru
 * @property string $name_kz
 * @property string $content_kz
 * @property string $url
 * @property string $foto
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    public function behaviors()
    {
        return [

            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
                ],
            ],
        [
            'class' => SluggableBehavior::className(),
            'attribute' => 'name_ru',
            'slugAttribute' => 'url',
        ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat', 'status', 'date_create', 'date_update'], 'integer'],
            [['cat', 'status', 'date_create', 'date_update'], 'integer'],
            [['content_ru', 'content_kz'], 'string'],
            [['name_ru', 'name_kz', 'foto'], 'string', 'max' => 255],
//            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'Сатегория',
            'name_ru' => 'Название на руссском',
            'content_ru' => 'Материал на русском',
            'name_kz' => 'Название на казахском',
            'content_kz' => 'Материал на казахском',
            'url' => 'Url',
            'foto' => 'Foto',
            'status' => 'Статус',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Catnews::className(), ['id' => 'id']);
    }
}

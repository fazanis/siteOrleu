<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\ActiveQuery;
use backend\models\Translit;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property int $cat
 * @property string $name_ru
 * @property string $content_ru
 * @property string $name_kz
 * @property string $content_kz
 * @property string $foto
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat'], 'required'],
            [['cat'], 'integer'],
            [['content_ru', 'content_kz'], 'string'],
            [['name_ru', 'name_kz', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'Категория',
            'name_ru' => 'Название на русском',
            'content_ru' => 'Текст на русском',
            'name_kz' => 'Название на казахском',
            'content_kz' => 'Текст на казахском',
            'foto' => 'Главное фото',
        ];
    }

    public function getCatList()
    {
        $result = Yii::$app->db->createCommand('SELECT * FROM catnews')->queryAll();
        return ArrayHelper::map($result,'id','name_ru');
    }

}

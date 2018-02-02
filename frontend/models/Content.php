<?php

namespace frontend\models;

use Yii;

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
            'cat' => 'Cat',
            'name_ru' => 'Name Ru',
            'content_ru' => 'Content Ru',
            'name_kz' => 'Name Kz',
            'content_kz' => 'Content Kz',
            'foto' => 'Foto',
        ];
    }


}

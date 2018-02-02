<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "catnews".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
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
            [['name_ru', 'name_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Название категории на русском',
            'name_kz' => 'Название категории на казахском',
        ];
    }
    public static function getOneCat($id)
    {
        $catnews = Yii::$app->db->createCommand('SELECT * FROM catnews WHERE id="'.$id.'"')->queryOne() ;
        return $catnews['name_ru'];

    }

}

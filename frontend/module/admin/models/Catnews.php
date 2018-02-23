<?php

namespace frontend\module\admin\models;

use function React\Promise\all;
use Yii;
use yii\behaviors\SluggableBehavior;

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

    public function behaviors()
    {
        return [

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
            ],
        ];
    }

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
            [['name_ru'], 'required'],
            [['name_ru', 'name_kz', 'url'], 'string', 'max' => 255],
            [['parent_id'],'integer'],
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
            'name_kz' => 'Назавание на казахском',
            'url' => 'Url',
            'parent_id' => 'Родительская категория',
        ];
    }

    public function getTree()
    {
        return $this->hasOne(Catnews::className(), ['id' => 'parent_id']);
    }
    public function getTrees()
    {
        return $this->hasMany(Catnews::className(), ['tree_id' => 'id']);
    }



}

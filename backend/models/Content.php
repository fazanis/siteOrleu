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
            [['cat','status'], 'integer'],
            [['content_ru', 'content_kz'], 'string'],
            [['name_ru', 'name_kz', 'foto' ,'url'], 'string', 'max' => 255],
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
            'status' => 'Статус',
        ];
    }

    public function getCatList()
    {
        $result = Yii::$app->db->createCommand('SELECT * FROM catnews')->queryAll();
        return ArrayHelper::map($result,'id','name_ru');
    }
    

    public function addContent()
    {
        if ($this->validators) {
            $stat = new Content();
            $stat->name_ru = $this->name_ru;
            $stat->name_kz = $this->name_kz;
            $stat->content_ru = $this->content_ru;
            $stat->content_kz = $this->content_kz;
            $stat->cat = $this->cat;
            $stat->url = Translit::t($this->name_ru);
            $stat->date_create = time();
            $stat->date_update = time();
            $stat->status = 1;
            return $stat->save();

        }

        return false;
    }
}

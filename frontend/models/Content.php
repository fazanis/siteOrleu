<?php

namespace frontend\models;

use frontend\widgets\WLang;
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
            [['name_ru', 'name_kz', 'foto','url'], 'string', 'max' => 255],
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

    public static function shortImgMain($text)
    {
        preg_match('/<img(.*)src(.*)=(.*)"(.*)"/U', $text, $imgresult);
        $firstImgScr = array_pop($imgresult);
        return $firstImgScr;

    }
    public static function shortImgNews($text)
    {
        preg_match('/<img(.*)src(.*)=(.*)"(.*)"/U', $text, $imgresult);
        $firstImgScr = array_pop($imgresult);
        return '<img src='.$firstImgScr.'>';

    }

    public static function shortContent($text)
    {
        $text= preg_replace('/<img[^>]+\>/', '', $text, 1);
        return substr($text,0,200);
    }

    public static function dateFomat($date)
    {
        $masdate = getdate($date);
        return $masdate['mday'].'.'.$masdate['mon'].'.'.$masdate['year'];
    }

    public static function getCatUrl($cat)
    {
        $url = Catnews::findOne(['id'=>$cat]);
        return $url['url'];
    }

    public static function getCatName($cat)
    {
        $name = Catnews::findOne(['id'=>$cat]);
        return $name['name_ru'];
    }

}

<?php

namespace frontend\models;

use Carbon\Carbon;
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
    public function shortImgNews()
    {
        preg_match('/<img(.*)src(.*)=(.*)"(.*)"/U', $this->content_ru, $imgresult);
        $firstImgScr = array_pop($imgresult);
        return $firstImgScr;
//        return '<img src='.$firstImgScr.'>';

    }

    public function shortContent()
    {
        $text= preg_replace('/<img[^>]+\>/', '', $this->{'content_'.WLang::getLang()}, 1);
        $str = mb_substr($text,0,400);
        return strip_tags($str);
    }

    public function dateFomat()
    {
        return Carbon::parse($this->date_create)->format('d/m/Y');
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

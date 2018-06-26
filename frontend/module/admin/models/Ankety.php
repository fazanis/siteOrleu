<?php

namespace frontend\module\admin\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "ankety".
 *
 * @property int $id
 * @property int $otdel_id
 * @property string $dolzhnost_ru
 * @property string $dolzhnost_kz
 * @property string $fio_ru
 * @property string $fio_kz
 * @property string $nagradi_ru
 * @property string $nagradi_kz
 * @property string $publikacii_ru
 * @property string $publikacii_kz
 * @property string $email
 * @property string $phone
 * @property string $kabinet
 * @property string $education_ru
 * @property string $education_kz
 * @property string $stepen_ru
 * @property string $stepen_kz
 */
class Ankety extends \yii\db\ActiveRecord
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
        return 'ankety';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['otdel_id'], 'integer'],
            [['nagradi_ru', 'nagradi_kz', 'publikacii_ru', 'publikacii_kz', 'stepen_ru', 'stepen_kz', 'education_ru', 'education_kz'], 'string'],
            [['dolzhnost_ru', 'dolzhnost_kz', 'fio_ru', 'fio_kz', 'email', 'phone', 'kabinet'], 'string', 'max' => 255],
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
            'image' => 'Фото',
            'otdel_id' => 'Отдел',
            'dolzhnost_ru' => 'Должность на русском',
            'dolzhnost_kz' => 'Должность на казахском',
            'fio_ru' => 'ФИО сотрудника на русском',
            'fio_kz' => 'ФИО сотрудника на казахском',
            'nagradi_ru' => 'Награды на русском',
            'nagradi_kz' => 'Награды на казахском',
            'publikacii_ru' => 'Публикации на русском',
            'publikacii_kz' => 'Публикации на казахском',
            'stepen_ru'=>'Ученная степень на русском',
            'stepen_kz'=>'Ученная степень на казахском',
            'education_ru'=>'Образование на русском',
            'education_kz'=>'Образование на казахском',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'kabinet' => 'Кабинет',
        ];
    }

    public function getOtdel()
    {
        return $this->hasOne(Otdel::className(), ['id' => 'otdel_id']);
    }

    public static function getOtdeli()
    {
        return ArrayHelper::map(Otdel::find()->all(), 'id', 'name_ru');
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'upload/photocollectiva/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        } else {
            return false;
        }
    }
}

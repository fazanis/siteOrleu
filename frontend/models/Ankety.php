<?php

namespace frontend\models;

use Yii;

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
 */
class Ankety extends \yii\db\ActiveRecord
{
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
            [['nagradi_ru', 'nagradi_kz', 'publikacii_ru', 'publikacii_kz'], 'string'],
            [['dolzhnost_ru', 'dolzhnost_kz', 'fio_ru', 'fio_kz', 'email', 'phone', 'kabinet'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'otdel_id' => 'Otdel ID',
            'dolzhnost_ru' => 'Dolzhnost Ru',
            'dolzhnost_kz' => 'Dolzhnost Kz',
            'fio_ru' => 'Fio Ru',
            'fio_kz' => 'Fio Kz',
            'nagradi_ru' => 'Nagradi Ru',
            'nagradi_kz' => 'Nagradi Kz',
            'publikacii_ru' => 'Publikacii Ru',
            'publikacii_kz' => 'Publikacii Kz',
            'email' => 'Email',
            'phone' => 'Phone',
            'kabinet' => 'Kabinet',
        ];
    }
}

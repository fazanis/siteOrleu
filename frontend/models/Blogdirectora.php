<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blogdirectora".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $question
 * @property string $answer
 * @property int $public
 * @property int $read
 */
class Blogdirectora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogdirectora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'question'], 'required'],
            [['question', 'answer'], 'string'],
            [['public', 'read'], 'integer'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
            [['email'],'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'subject' => 'Тема вопроса',
            'question' => 'Вопрос',
            'answer' => 'Answer',
            'public' => 'Public',
            'read' => 'Read',
        ];
    }
}

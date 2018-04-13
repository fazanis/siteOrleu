<?php

namespace frontend\module\cabinet\models;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'question' => 'Question',
            'answer' => 'Answer',
            'public' => 'Public',
            'read' => 'Read',
        ];
    }

    public static function getAllQuestionCount()
    {
        return Blogdirectora::find()->count();
    }
    public static function getAnswerQuestionCount()
    {
        return Blogdirectora::find()->where(['answer'=>'']) ->count();
    }

    public static function getNotAnswerQuestionCount()
    {
        return self::getAllQuestionCount()-self::getAnswerQuestionCount();
    }

    public function getLinkFromQuestion()
    {
        return $this->id;
    }
}

<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class User extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','fio', 'auth_key', 'password_hash', 'email', 'created_at','role', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'username' => 'Логин',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Пароль',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'status',

            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

    }
    public function saveUser()
    {
        if ($this->validate()) {
            $user = new User();
            $user->fio = 'Аяшев Тал';
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->role = $this->role;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password_hash);

            return $user->updateCounters(['id' => 18]);

        }
        return false;

    }

    public static function getUserstatusList()
    {
        $result = Yii::$app->db->createCommand('SELECT * FROM userstatus')->queryAll();
        return ArrayHelper::map($result,'id','name');
    }

    public function getOneUser($id)
    {
        $result = Yii::$app->db->createCommand('SELECT * FROM userstatus WHERE id="'.$id.'"')->queryOne();
        return $result['name'];
    }
}


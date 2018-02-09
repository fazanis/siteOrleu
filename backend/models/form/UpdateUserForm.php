<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.02.2018
 * Time: 17:54
 */

namespace backend\models\form;
use Yii;
use backend\models\User;
use yii\base\Model;

class UpdateUserForm extends Model
{
    public $fio;
    public $username;
    public $email;
    public $password_hash;
    public $role;

    public function rules()
    {
        return[
            ['username','trim'],
            ['username','required'],
            ['username', 'string','min'=>2,'max'=>255],
            [['username'], 'unique', 'targetClass' => User::className()],

            ['email','trim'],
            ['email','required'],
            ['email','email'],
            ['email', 'string','max'=>255],
            [['email'], 'unique', 'targetClass' => User::className()],

            ['password_hash','required'],
            ['password_hash', 'string','min'=>6],

            ['fio','required'],
            ['fio', 'string','min'=>6],
            ['role','required'],
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
}
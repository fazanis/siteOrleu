<?php
namespace backend\models\form;

use Yii;
use backend\models\User;

class AddUserForm extends \yii\base\Model
{
    public $fio;
    public $username;
    public $email;
    public $password;

    public function rules()
    {

        return[
            ['username','trim'],
            ['username','required'],
            ['username', 'string','min'=>2,'max'=>255],

            ['email','trim'],
            ['email','required'],
            ['email','email'],
            ['email', 'string','max'=>255],

            ['password','required'],
            ['password', 'string','min'=>6],

            ['fio','required'],
            ['fio', 'string','min'=>6],
        ];
    }

    public function saveUser(){
        if ($this->validate()) {
            $user = new User();
            $user->fio = $this->fio;
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->role = '12';
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            return $user->save();

        }
        return false;
    }

}
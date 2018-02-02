<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.02.2018
 * Time: 11:54
 */

namespace backend\models\form;

use Yii;
use yii\base\Model;
use backend\models\User;


class AddUserForm extends Model
{
    public $fio;
    public $username;
    public $email;
    public $password;

    public function rules()
    {
       return [
           ['fio', 'trim'],
           ['fio', 'required'],
           ['fio', 'string', 'min' => 2, 'max' => 255],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max'=>255],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],


        ];
    }

    public function save()
    {
        if($this->validate()){
            $user = new User;
            echo $user->fio = $this->fio;die;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->password = $this->password;
            $user->repassword = $this->repassword;
            $user->created_at = time();
            $user->updated_at = time();
            $user->auth_key = Yii::$app->security->generateRandomString($this->auth_key);
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

           // return $user->save();


        }
        return false;
    }

}
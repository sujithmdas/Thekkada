<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $name;
    public $nickname;
    public $email;
    public $password;
    public $smoked;
    public $deceased;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['name', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['name', 'string', 'min' => 2, 'max' => 60],
            ['nickname', 'string', 'min' => 2, 'max' => 60],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
            ['smoked', 'required'],
            ['smoked', 'string', 'min' => 1, 'max'=>1],
            
            ['deceased', 'required'],
            ['deceased', 'string', 'min' => 1, 'max'=>1],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->name = $this->name;
            $user->nickname = $this->nickname;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->smoked = $this->smoked;
            $user->deceased = $this->deceased;
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}

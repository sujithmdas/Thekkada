<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $address
 * @property string $phone
 * @property string $mobile
 * @property string $occupation
 * @property string $office_address
 * @property string $date_of_birth
 * @property string $avatar
 * @property string $smoked
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'address'], 'required'],
            [['user_id'], 'integer'],
            [['address', 'office_address', 'smoked'], 'string'],
            [['date_of_birth'], 'safe'],
            [['phone', 'mobile'], 'string', 'max' => 15],
            [['occupation'], 'string', 'max' => 100],
            [['avatar'], 'string', 'max' => 150],
            [['user_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'address' => 'Address',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'occupation' => 'Occupation',
            'office_address' => 'Office Address',
            'date_of_birth' => 'Date Of Birth',
            'avatar' => 'Avatar',
            'smoked' => 'Smoked',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

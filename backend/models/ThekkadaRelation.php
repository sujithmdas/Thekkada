<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "thekkada_relation".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $father_id
 * @property integer $mother_id
 * @property integer $spouse_id
 *
 * @property User $spouse
 * @property User $user
 * @property User $father
 * @property User $mother
 */
class ThekkadaRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thekkada_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'father_id', 'mother_id', 'spouse_id'], 'integer'],
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
            'user_id' => 'User',
            'father_id' => 'Father',
            'mother_id' => 'Mother',
            'spouse_id' => 'Spouse',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpouse()
    {
        return $this->hasOne(User::className(), ['id' => 'spouse_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFather()
    {
        return $this->hasOne(User::className(), ['id' => 'father_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMother()
    {
        return $this->hasOne(User::className(), ['id' => 'mother_id']);
    }
}

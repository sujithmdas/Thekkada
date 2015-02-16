<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $description
 * @property string $event_at
 * @property string $created_at
 * @property integer $likes
 * @property integer $dislikes
 * @property string $status
 *
 * @property User $user
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title'], 'required'],
            [['user_id', 'likes', 'dislikes'], 'integer'],
            [['description', 'status'], 'string'],
            [['event_at', 'created_at'], 'safe'],
            [['title'], 'string', 'max' => 150]
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
            'title' => 'Title',
            'description' => 'Description',
            'event_at' => 'Event At',
            'created_at' => 'Created At',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'status' => 'Status',
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

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $post
 * @property string $posted_at
 * @property string $image
 * @property string $video
 * @property string $status
 * @property integer $likes
 * @property integer $dislikes
 *
 * @property User $user
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'post'], 'required'],
            [['user_id', 'likes', 'dislikes'], 'integer'],
            [['post', 'status'], 'string'],
            [['posted_at'], 'safe'],
            [['image', 'video'], 'string', 'max' => 150]
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
            'post' => 'Post',
            'posted_at' => 'Posted At',
            'image' => 'Image',
            'video' => 'Video',
            'status' => 'Status',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
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

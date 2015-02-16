<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $comment
 * @property string $image
 * @property string $commented_at
 * @property string $commented_on
 * @property integer $source_id
 * @property integer $likes
 * @property integer $dislikes
 * @property string $status
 *
 * @property User $user
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'comment', 'commented_on', 'source_id'], 'required'],
            [['user_id', 'source_id', 'likes', 'dislikes'], 'integer'],
            [['comment', 'commented_on', 'status'], 'string'],
            [['commented_at'], 'safe'],
            [['image'], 'string', 'max' => 150]
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
            'comment' => 'Comment',
            'image' => 'Image',
            'commented_at' => 'Commented At',
            'commented_on' => 'Commented On',
            'source_id' => 'Source ID',
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

<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "courtyard".
 *
 * @property integer $id
 * @property integer $owner_id
 * @property string $post
 * @property integer $author_id
 * @property string $posted_at
 * @property integer $likes
 * @property integer $dislikes
 * @property string $status
 *
 * @property User $author
 * @property User $owner
 */
class Courtyard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courtyard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id', 'post', 'author_id'], 'required'],
            [['owner_id', 'author_id', 'likes', 'dislikes'], 'integer'],
            [['post', 'status'], 'string'],
            [['posted_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_id' => 'Owner ID',
            'post' => 'Post',
            'author_id' => 'Author ID',
            'posted_at' => 'Posted At',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }
}

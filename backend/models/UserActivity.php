<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_activity".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $activity
 * @property string $action
 * @property integer $activity_id
 */
class UserActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'activity', 'action', 'activity_id'], 'required'],
            [['user_id', 'activity_id'], 'integer'],
            [['activity', 'action'], 'string']
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
            'activity' => 'Activity',
            'action' => 'Action',
            'activity_id' => 'Activity ID',
        ];
    }
}

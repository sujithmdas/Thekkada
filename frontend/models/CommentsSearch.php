<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `frontend\models\Comments`.
 */
class CommentsSearch extends Comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'source_id', 'likes', 'dislikes'], 'integer'],
            [['comment', 'image', 'commented_at', 'commented_on', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'commented_at' => $this->commented_at,
            'source_id' => $this->source_id,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'commented_on', $this->commented_on])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}

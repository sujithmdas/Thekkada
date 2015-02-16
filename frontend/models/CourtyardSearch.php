<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Courtyard;

/**
 * CourtyardSearch represents the model behind the search form about `frontend\models\Courtyard`.
 */
class CourtyardSearch extends Courtyard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'owner_id', 'author_id', 'likes', 'dislikes'], 'integer'],
            [['post', 'posted_at', 'status'], 'safe'],
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
        $query = Courtyard::find();

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
            'owner_id' => $this->owner_id,
            'author_id' => $this->author_id,
            'posted_at' => $this->posted_at,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
        ]);

        $query->andFilterWhere(['like', 'post', $this->post])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}

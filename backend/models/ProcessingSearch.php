<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Processing;

/**
 * ProcessingSearch represents the model behind the search form about `backend\models\Processing`.
 */
class ProcessingSearch extends Processing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['process_id', 'book_id', 'member_id'], 'integer'],
            [['member_name', 'book_name', 'doi', 'dor'], 'safe'],
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
        $query = Processing::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'process_id' => $this->process_id,
            'book_id' => $this->book_id,
            'member_id' => $this->member_id,
        ]);

        $query->andFilterWhere(['like', 'member_name', $this->member_name])
            ->andFilterWhere(['like', 'book_name', $this->book_name])
            ->andFilterWhere(['like', 'doi', $this->doi])
            ->andFilterWhere(['like', 'dor', $this->dor]);

        return $dataProvider;
    }
}

<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Books;

/**
 * BooksSearch represents the model behind the search form about `backend\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id'], 'integer'],
            [['book_name', 'book_author', 'book_flag'], 'safe'],
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
        $query = Books::find();

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
            'book_id' => $this->book_id,
        ]);

        $query->andFilterWhere(['like', 'book_name', $this->book_name])
            ->andFilterWhere(['like', 'book_author', $this->book_author])
            ->andFilterWhere(['like', 'book_flag', $this->book_flag]);

        return $dataProvider;
    }
}

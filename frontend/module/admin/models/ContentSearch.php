<?php

namespace frontend\module\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\module\admin\models\Content;

/**
 * ContentSearch represents the model behind the search form of `frontend\module\admin\models\Content`.
 */
class ContentSearch extends Content
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat', 'status', 'date_create', 'date_update'], 'integer'],
            [['name_ru', 'content_ru', 'name_kz', 'content_kz', 'url', 'foto'], 'safe'],
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
        $query = Content::find();

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
            'id' => $this->id,
            'cat' => $this->cat,
            'status' => $this->status,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'name_kz', $this->name_kz])
            ->andFilterWhere(['like', 'content_kz', $this->content_kz])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}

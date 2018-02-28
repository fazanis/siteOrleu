<?php

namespace frontend\module\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\module\admin\models\Ankety;

/**
 * AnketySearch represents the model behind the search form of `frontend\module\admin\models\Ankety`.
 */
class AnketySearch extends Ankety
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'otdel_id'], 'integer'],
            [['dolzhnost_ru', 'dolzhnost_kz', 'fio_ru', 'fio_kz', 'nagradi_ru', 'nagradi_kz', 'publikacii_ru', 'publikacii_kz', 'email', 'phone', 'kabinet'], 'safe'],
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
        $query = Ankety::find();

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
            'otdel_id' => $this->otdel_id,
        ]);

        $query->andFilterWhere(['like', 'dolzhnost_ru', $this->dolzhnost_ru])
            ->andFilterWhere(['like', 'dolzhnost_kz', $this->dolzhnost_kz])
            ->andFilterWhere(['like', 'fio_ru', $this->fio_ru])
            ->andFilterWhere(['like', 'fio_kz', $this->fio_kz])
            ->andFilterWhere(['like', 'nagradi_ru', $this->nagradi_ru])
            ->andFilterWhere(['like', 'nagradi_kz', $this->nagradi_kz])
            ->andFilterWhere(['like', 'publikacii_ru', $this->publikacii_ru])
            ->andFilterWhere(['like', 'publikacii_kz', $this->publikacii_kz])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'kabinet', $this->kabinet]);

        return $dataProvider;
    }
}

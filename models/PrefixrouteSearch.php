<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prefixroute;

/**
 * PrefixrouteSearch represents the model behind the search form of `app\models\Prefixroute`.
 */
class PrefixrouteSearch extends Prefixroute
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Route1', 'Route2', 'Route3', 'Route4', 'Route5', 'Route6', 'Route7', 'Route8'], 'integer'],
            [['Name', 'SoftSwitch', 'PrefixGroup', 'CallSource'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Prefixroute::find();

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
            'ID' => $this->ID,
            'Route1' => $this->Route1,
            'Route2' => $this->Route2,
            'Route3' => $this->Route3,
            'Route4' => $this->Route4,
            'Route5' => $this->Route5,
            'Route6' => $this->Route6,
            'Route7' => $this->Route7,
            'Route8' => $this->Route8,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SoftSwitch', $this->SoftSwitch])
            ->andFilterWhere(['like', 'PrefixGroup', $this->PrefixGroup])
            ->andFilterWhere(['like', 'CallSource', $this->CallSource]);

        return $dataProvider;
    }
}

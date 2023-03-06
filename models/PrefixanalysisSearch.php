<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prefixanalysis;

/**
 * PrefixanalysisSearch represents the model behind the search form of `app\models\Prefixanalysis`.
 */
class PrefixanalysisSearch extends Prefixanalysis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Anumber', 'Bnumber', 'lcr_rule_id', 'A_GroupID', 'B_GroupID'], 'integer'],
            [['Name', 'SoftSwitch', 'PrefixGroup'], 'safe'],
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
        $query = Prefixanalysis::find();

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
            'Anumber' => $this->Anumber,
            'Bnumber' => $this->Bnumber,
            'lcr_rule_id' => $this->lcr_rule_id,
            'A_GroupID' => $this->A_GroupID,
            'B_GroupID' => $this->B_GroupID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SoftSwitch', $this->SoftSwitch])
            ->andFilterWhere(['like', 'PrefixGroup', $this->PrefixGroup]);

        return $dataProvider;
    }
}

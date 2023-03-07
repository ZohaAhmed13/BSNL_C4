<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trunkgroup;

/**
 * TrunkgroupSearch represents the model behind the search form of `app\models\Trunkgroup`.
 */
class TrunkgroupSearch extends Trunkgroup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Route', 'DestinationIP', 'lcr_gw_id', 'A_GroupID', 'B_GroupID'], 'integer'],
            [['Name', 'SoftSwitch', 'Type', 'MediaGateway', 'DestinationHostName', 'DestinationPort', 'CallSource', 'Pre_Strip_cnt', 'Pre_add_val', 'Enable', 'RouteSource'], 'safe'],
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
        $query = Trunkgroup::find();

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
            'Route' => $this->Route,
            'DestinationIP' => $this->DestinationIP,
            'lcr_gw_id' => $this->lcr_gw_id,
            'A_GroupID' => $this->A_GroupID,
            'B_GroupID' => $this->B_GroupID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SoftSwitch', $this->SoftSwitch])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'MediaGateway', $this->MediaGateway])
            ->andFilterWhere(['like', 'DestinationHostName', $this->DestinationHostName])
            ->andFilterWhere(['like', 'DestinationPort', $this->DestinationPort])
            ->andFilterWhere(['like', 'CallSource', $this->CallSource])
            ->andFilterWhere(['like', 'Pre_Strip_cnt', $this->Pre_Strip_cnt])
            ->andFilterWhere(['like', 'Pre_add_val', $this->Pre_add_val])
            ->andFilterWhere(['like', 'Enable', $this->Enable])
            ->andFilterWhere(['like', 'RouteSource', $this->RouteSource]);

        return $dataProvider;
    }
}

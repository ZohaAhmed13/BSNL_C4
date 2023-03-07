<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Innumberprocessing;

/**
 * InnumberprocessingSearch represents the model behind the search form of `app\models\Innumberprocessing`.
 */
class InnumberprocessingSearch extends Innumberprocessing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'SourceID', 'AnumberGroup', 'BnumberGroup'], 'integer'],
            [['Name', 'SoftSwitch', 'CallSource', 'TrunkGroup'], 'safe'],
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
        $query = Innumberprocessing::find();

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
            'SourceID' => $this->SourceID,
            'AnumberGroup' => $this->AnumberGroup,
            'BnumberGroup' => $this->BnumberGroup,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SoftSwitch', $this->SoftSwitch])
            ->andFilterWhere(['like', 'CallSource', $this->CallSource])
            ->andFilterWhere(['like', 'TrunkGroup', $this->TrunkGroup]);

        return $dataProvider;
    }
}

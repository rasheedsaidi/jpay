<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'UserID'], 'integer'],
            [['FirstName', 'LastName', 'MiddleName', 'Gender', 'Address', 'State', 'City', 'Phone', 'Occupation', 'DateOfBirth', 'MeansOfIdentification', 'IdentificationNumber', 'CreatedAt', 'UpdatedAt'], 'safe'],
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
        $query = Profile::find();

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
            'UserID' => $this->UserID,
            'DateOfBirth' => $this->DateOfBirth,
            'CreatedAt' => $this->CreatedAt,
            'UpdatedAt' => $this->UpdatedAt,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'MiddleName', $this->MiddleName])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'State', $this->State])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'Phone', $this->Phone])
            ->andFilterWhere(['like', 'Occupation', $this->Occupation])
            ->andFilterWhere(['like', 'MeansOfIdentification', $this->MeansOfIdentification])
            ->andFilterWhere(['like', 'IdentificationNumber', $this->IdentificationNumber]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Potongan;

/**
 * PotonganSearch represents the model behind the search form of `app\models\Potongan`.
 */
class PotonganSearch extends Potongan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_potongan', 'id_karyawan', 'jenis_potongan', 'nilai_potongan'], 'integer'],
            [['date'], 'safe'],
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
        $query = Potongan::find();

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
            'id_potongan' => $this->id_potongan,
            'id_karyawan' => $this->id_karyawan,
            'date' => $this->date,
            'jenis_potongan' => $this->jenis_potongan,
            'nilai_potongan' => $this->nilai_potongan,
        ]);

        return $dataProvider;
    }
}

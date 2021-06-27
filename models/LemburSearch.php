<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lembur;

/**
 * LemburSearch represents the model behind the search form of `app\models\Lembur`.
 */
class LemburSearch extends Lembur
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lembur', 'id_karyawan', 'nilai_lembur'], 'integer'],
            [['tanggal_lembur'], 'safe'],
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
        $query = Lembur::find();

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
            'id_lembur' => $this->id_lembur,
            'tanggal_lembur' => $this->tanggal_lembur,
            'id_karyawan' => $this->id_karyawan,
            'nilai_lembur' => $this->nilai_lembur,
        ]);

        return $dataProvider;
    }
}

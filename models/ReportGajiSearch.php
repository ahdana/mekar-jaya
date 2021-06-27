<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportGaji;

/**
 * ReportGajiSearch represents the model behind the search form of `app\models\ReportGaji`.
 */
class ReportGajiSearch extends ReportGaji
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_report_gaji', 'id_karyawan', 'gaji_pokok', 'total_lembur', 'total_potongan', 'total_gaji'], 'integer'],
            [['tanggal_terima'], 'safe'],
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
        $query = ReportGaji::find();

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
            'id_report_gaji' => $this->id_report_gaji,
            'id_karyawan' => $this->id_karyawan,
            'tanggal_terima' => $this->tanggal_terima,
            'gaji_pokok' => $this->gaji_pokok,
            'total_lembur' => $this->total_lembur,
            'total_potongan' => $this->total_potongan,
            'total_gaji' => $this->total_gaji,
        ]);

        return $dataProvider;
    }
}

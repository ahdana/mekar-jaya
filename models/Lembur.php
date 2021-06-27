<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembur".
 *
 * @property int $id_lembur
 * @property string $tanggal_lembur
 * @property int $id_karyawan
 * @property int $nilai_lembur
 */
class Lembur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lembur', 'tanggal_lembur', 'id_karyawan', 'nilai_lembur'], 'required'],
            [['id_lembur', 'id_karyawan', 'nilai_lembur'], 'integer'],
            [['tanggal_lembur'], 'safe'],
        ];
    }    

    public function getKaryawan() {
        return $this->hasOne(Karyawan::className(), ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lembur' => 'Id Lembur',
            'tanggal_lembur' => 'Tanggal Lembur',
            'id_karyawan' => 'Id Karyawan',
            'nilai_lembur' => 'Nilai Lembur',
        ];
    }
}

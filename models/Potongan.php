<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potongan".
 *
 * @property int $id_potongan
 * @property int $id_karyawan
 * @property string $date
 * @property int $jenis_potongan
 * @property int $nilai_potongan
 *
 * @property Karyawan $karyawan
 */
class Potongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'date', 'jenis_potongan', 'nilai_potongan'], 'required'],
            [['id_karyawan', 'jenis_potongan', 'nilai_potongan'], 'integer'],
            [['date'], 'safe'],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_potongan' => 'Id Potongan',
            'id_karyawan' => 'Id Karyawan',
            'date' => 'Date',
            'jenis_potongan' => 'Jenis Potongan',
            'nilai_potongan' => 'Nilai Potongan',
        ];
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id_karyawan' => 'id_karyawan']);
    }
}

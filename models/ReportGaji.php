<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_gaji".
 *
 * @property int $id_report_gaji
 * @property int $id_karyawan
 * @property string $tanggal_terima
 * @property int $gaji_pokok
 * @property int $total_lembur
 * @property int $total_potongan
 * @property int $total_gaji
 *
 * @property Karyawan $karyawan
 */
class ReportGaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'tanggal_terima', 'gaji_pokok', 'total_lembur', 'total_potongan', 'total_gaji'], 'required'],
            [['id_karyawan', 'gaji_pokok', 'total_lembur', 'total_potongan', 'total_gaji'], 'integer'],
            [['tanggal_terima'], 'safe'],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_report_gaji' => 'Id Report Gaji',
            'id_karyawan' => 'Id Karyawan',
            'tanggal_terima' => 'Tanggal Terima',
            'gaji_pokok' => 'Gaji Pokok',
            'total_lembur' => 'Total Lembur',
            'total_potongan' => 'Total Potongan',
            'total_gaji' => 'Total Gaji',
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

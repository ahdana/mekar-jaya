<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $naa_karyawan
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $jabatan
 * @property int $gaji_pokok
 * @property int $tunjangan
 */
class Karyawan extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['naa_karyawan', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'jabatan', 'gaji_pokok', 'tunjangan'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['gaji_pokok', 'tunjangan'], 'integer'],
            [['naa_karyawan'], 'string', 'max' => 80],
            [['tempat_lahir'], 'string', 'max' => 16],
            [['jenis_kelamin'], 'string', 'max' => 1],
            [['jabatan'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id_karyawan' => 'Id Karyawan',
            'naa_karyawan' => 'Nama Karyawan',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'jabatan' => 'Jabatan',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan' => 'Tunjangan',
        ];
    }

    public static function totalPotongan($id) {
        $val = Potongan::find()->where(['id_karyawan' => $id])->sum('nilai_potongan');
        if ($val == null) {
            return 0;
        } else {
            return $val;
        }
    }

    public static function totalLembur($id) {
        $val = Lembur::find()->where(['id_karyawan' => $id])->sum('nilai_lembur');
        if ($val >= 4) {
            $val = $val * 2;
        }
        if ($val == null) {
            return 0;
        } else {
            return $val;
        }
    }

}

<?php

namespace app\helpers;

use Yii;

class MyHelper {

    public static function rp($var) {
        return number_format($var, "2", ',', '.');
    }

    public static function dec($var) {
        return number_format($var, "2");
    }

    public function tanggal($tgl, $w_time = false) {
        //2018-05-03 14:01:00
        $tgl_ = explode(" ", $tgl);
        $dates = $tgl_[0];

        $split = explode("-", $dates);
        $bulan = $this->GetBulan($split[1]);
        if ($w_time == false || (isset($tgl_[1]) && $tgl_[1] == '00:00:00')) {
            return $split[2] . " " . $bulan . " " . $split[0];
        } else if(isset($tgl_[1])) {
            return $split[2] . " " . $bulan . " " . $split[0] . " " . $tgl_[1];
        }
        else{
            return $split[2] . " " . $bulan . " " . $split[0];
        }
    }

    public function GetBulan($param) {
        switch ($param) {
            case '01':
                return 'Januari';
                break;
            case '02':
                return 'Februari';
                break;
            case '03':
                return 'Maret';
                break;
            case '04':
                return 'April';
                break;
            case '05':
                return 'Mei';
                break;
            case '06':
                return 'Juni';
                break;
            case '07':
                return 'Juli';
                break;
            case '08':
                return 'Agustus';
                break;
            case '09':
                return 'September';
                break;
            case '10':
                return 'Oktober';
                break;
            case '11':
                return 'November';
                break;
            case '12':
                return 'Desember';
                break;
        }
    }

    public function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    public function terbilang($nilai) {
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return ucwords($hasil);
    }

    public function getRequest() {
        return Yii::$app->controller->id . "/" . Yii::$app->controller->action->id;
    }

    public function NormalisasiAngka($angka) {
        // $angka=str_replace(".00", "", $angka);
        $temp = preg_replace("/[^0-9]/", "", $angka);
        return (double) $temp;
    }

}

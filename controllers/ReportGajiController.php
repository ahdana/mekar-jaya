<?php

namespace app\controllers;

use app\models\KaryawanSearch;
use app\models\ReportGajiSearch;
use app\models\Karyawan;

class ReportGajiController extends \yii\web\Controller {

    public function actionIndex() {
        $searchKar = new KaryawanSearch();
        $dataKar = $searchKar->search(\Yii::$app->request->queryParams, 1);

        $searchAcc = new ReportGajiSearch();
        $dataAcc = $searchAcc->search(\Yii::$app->request->queryParams, 1);

        return $this->render('index', [
                    'searchKar' => $searchKar,
                    'dataKar' => $dataKar,
                    'searchAcc' => $searchAcc,
                    'dataAcc' => $dataAcc
        ]);
    }

    protected function findModel($id) {
        if (($model = Karyawan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

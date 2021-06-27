<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LemburSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lemburs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lembur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id_lembur',
            [
                'attribute' => 'tanggal_lembur',
                'value' => function ($model) {
                    $helpers = new \app\helpers\MyHelper();
                    return $helpers->tanggal($model->tanggal_lembur, true);
                },
            ],
//            'tanggal_lembur',
//            'id_karyawan',
            [
                'attribute' => 'id_karyawan',
                'label' => 'Nama Karyawan',
                'value' => function ($model) {
                    return $model->karyawan->naa_karyawan;
                }
            ],
            [
                'attribute' => 'nilai_lembur',
                'label' => 'Jam Lembur',
                'value' => function ($model) {
                    return $model->nilai_lembur . ' Jam';
                }
            ],
//            'nilai_lembur',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>

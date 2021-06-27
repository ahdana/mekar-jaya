<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\helpers\MyHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karyawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'naa_karyawan',
            'tempat_lahir',
            [
                'attribute' => 'tanggal_lahir',
                'value' => function ($model) {
                    $helpers = new MyHelper();
                    return $helpers->tanggal($model->tanggal_lahir, true);
                },
            ],
            'jenis_kelamin',
            //'jabatan',
            //'gaji_pokok',
            //'tunjangan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>

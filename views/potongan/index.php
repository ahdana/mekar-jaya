<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PotonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Potongan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Potongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id_potongan',
//            'id_karyawan',
            [
                'attribute' => 'id_karyawan',
                'label' => 'Nama Karyawan',
                'value' => function ($model) {
                    return $model->karyawan->naa_karyawan;
                }
            ],
            [
                'attribute' => 'date',
                'label' => 'Tanggal',
                'value' => function ($model) {
                    $helpers = new \app\helpers\MyHelper();
                    return $helpers->tanggal($model->date, true);
                },
            ],
            'jenis_potongan',
            'nilai_potongan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>

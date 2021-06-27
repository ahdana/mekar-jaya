<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Potongan */

$this->title = $model->karyawan->naa_karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="potongan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_potongan], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id_potongan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
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
//            'date',
            [
                'label' => 'Jenis Potongan',
                'attribute' => 'jenis_potongan',
                'value' => function ($model) {
                    return $model->jenis_potongan == 0 ? 'NWNP / Bolos' : 'BPJS Ketenagakerjaan';
                }
            ],
//            'jenis_potongan',
            'nilai_potongan',
        ],
    ])
    ?>

</div>

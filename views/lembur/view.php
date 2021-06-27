<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\helpers\MyHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Lembur */

$this->title = $model->karyawan->naa_karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Lemburs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lembur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lembur], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id_lembur], [
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
            [
                'attribute' => 'tanggal_lembur',
                'value' => function ($model) {
                    $helpers = new MyHelper();
                    return $helpers->tanggal($model->tanggal_lembur, true);
                },
            ],
//            'tanggal_lembur',
            [
                'attribute' => 'id_karyawan',
                'label' => 'Nama Karyawan',
                'value' => function ($model) {
                    return $model->karyawan->naa_karyawan;
                }
            ],
//            'id_karyawan',
            [
                'attribute' => 'nilai_lembur',
                'label' => 'Jam Lembur',
                'value' => function ($model) {
                    return $model->nilai_lembur . ' Jam';
                }
            ],
//            'nilai_lembur',
        ],
    ])
    ?>

</div>

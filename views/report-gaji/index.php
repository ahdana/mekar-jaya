<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form ActiveForm */
?>
<div class="report-gaji-index">
    <div class="c-content-tab-1 c-theme c-margin-t-30">
        <div class="clearfix">
            <ul class="nav nav-tabs c-font-uppercase c-font-bold">
                <li>
                    <a href="#tab_1_1_content" data-toggle="tab">Bulan Ini</a>
                </li>
                <li>
                    <a href="#tab_1_2_content" data-toggle="tab">ACC</a>
                </li>
            </ul>
        </div>
        <div class="box box-primary" id="myTabContent">
            <div class="box-body">
                <div class="tab-content c-bordered c-padding-lg">
                    <div class="tab-pane" id="tab_1_1_content">
                        <div class="table-responsive">

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            echo \yii\grid\GridView::widget([
                                'dataProvider' => $dataKar,
                                'filterModel' => $searchKar,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    [
                                        'attribute' => 'naa_karyawan'
                                    ],
                                    [
                                        'label' => 'Gaji Pokok',
                                        'value' => function ($model) {
                                            return $model->gaji_pokok;
                                        }
                                    ],
                                    [
                                        'label' => 'Total Lembur',
                                        'value' => function ($model) {
                                            return round(($model->gaji_pokok / 173) * $model->totalLembur($model->id_karyawan), 2);
                                        }
                                    ],
                                    [
                                        'label' => 'Total Potongan',
                                        'value' => function ($model) {
                                            return $model->totalPotongan($model->id_karyawan);
                                        }
                                    ],
                                    [
                                        'label' => 'Total Gaji',
                                        'value' => function ($model) {
                                            return round($model->gaji_pokok + ($model->gaji_pokok / 173) * $model->totalLembur($model->id_karyawan) - $model->totalPotongan($model->id_karyawan), 2);
                                        }
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Verifikasi',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['class' => 'text-center'],
                                        'template' => '{accept}',
                                    ]
                                ],
                            ]);
                            ?>
                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_2_content">
                        <div class="table-responsive">
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?=
                            \yii\grid\GridView::widget([
                                'dataProvider' => $dataAcc,
                                'filterModel' => $searchAcc,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    [
                                    ],
                                ],
                            ]);
                            ?>
                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- report-gaji-index -->

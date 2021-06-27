<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Karyawan;

/* @var $this yii\web\View */
/* @var $model app\models\Lembur */
/* @var $form yii\widgets\ActiveForm */

$arrKar = Karyawan::find()->all();
$data = ArrayHelper::map($arrKar, 'id_karyawan', 'naa_karyawan');
$arrLem = array(
    1 => '1 Jam',
    2 => '2 Jam',
    3 => '3 Jam',
    4 => '4 Jam',
    5 => '5 Jam',
    6 => '6 Jam',
    7 => '7 Jam',
    8 => '8 Jam'
);
?>

<div class="lembur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'tanggal_lembur')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'todayHighlight' => true,
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?php
//    echo $form->field($model, 'id_karyawan')->textInput();
    echo $form->field($model, 'id_karyawan')->widget(Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Pilih Karyawan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Nama Karyawan');
    ?>

    <?php
//    echo $form->field($model, 'nilai_lembur')->textInput();
    echo $form->field($model, 'nilai_lembur')->widget(Select2::classname(), [
        'data' => $arrLem,
        'options' => ['placeholder' => 'Berapa Jam ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Jam Lembur');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

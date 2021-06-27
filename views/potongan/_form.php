<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Potongan */
/* @var $form yii\widgets\ActiveForm */

$arrKar = \app\models\Karyawan::find()->all();
$data = yii\helpers\ArrayHelper::map($arrKar, 'id_karyawan', 'naa_karyawan');
$potongan = array(
    0 => 'NWNP / Bolos',
    1 => 'BPJS Ketenagakerjaan'
);
?>

<div class="potongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
//    echo $form->field($model, 'id_karyawan')->textInput();
    echo $form->field($model, 'id_karyawan')->widget(\kartik\select2\Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Pilih Karyawan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Nama Karyawan');
    ?>

    <?php
//    echo $form->field($model, 'date')->textInput();
    echo $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'todayHighlight' => true,
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?php
//    echo $form->field($model, 'jenis_potongan')->textInput();
    echo $form->field($model, 'jenis_potongan')->textInput([
        'disabled' => true,
        'value' => 'NWNP / Bolos'
    ])->label('Jenis Potongan');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

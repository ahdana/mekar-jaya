<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LemburSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_lembur') ?>

    <?= $form->field($model, 'tanggal_lembur') ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'nilai_lembur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

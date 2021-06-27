<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PotonganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="potongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_potongan') ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'jenis_potongan') ?>

    <?= $form->field($model, 'nilai_potongan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

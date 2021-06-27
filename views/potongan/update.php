<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Potongan */

$this->title = 'Update Potongan: ' . $model->id_potongan;
$this->params['breadcrumbs'][] = ['label' => 'Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_potongan, 'url' => ['view', 'id' => $model->id_potongan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

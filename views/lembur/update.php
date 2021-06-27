<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lembur */

$this->title = 'Update Lembur: ' . $model->id_lembur;
$this->params['breadcrumbs'][] = ['label' => 'Lemburs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lembur, 'url' => ['view', 'id' => $model->id_lembur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lembur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

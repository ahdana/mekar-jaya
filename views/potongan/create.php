<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Potongan */

$this->title = 'Create Potongan';
$this->params['breadcrumbs'][] = ['label' => 'Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potongan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

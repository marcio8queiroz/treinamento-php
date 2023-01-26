<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pais2 $model */

$this->title = 'Update Pais2: ' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Pais2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'codigo' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pais2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

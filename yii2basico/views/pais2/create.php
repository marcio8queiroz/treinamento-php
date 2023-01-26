<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pais2 $model */

$this->title = 'Create Pais2';
$this->params['breadcrumbs'][] = ['label' => 'Pais2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

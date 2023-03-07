<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixanalysis $model */

$this->title = 'Update Prefixanalysis: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Prefixanalyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prefixanalysis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

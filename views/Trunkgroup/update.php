<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trunkgroup $model */

$this->title = 'Update Trunkgroup: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Trunkgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trunkgroup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixgroup $model */

$this->title = 'Update Prefixgroup: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Prefixgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prefixgroup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

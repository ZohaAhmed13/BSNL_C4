<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Numberchangegroup $model */

$this->title = 'Update Numberchangegroup: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Numberchangegroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="numberchangegroup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

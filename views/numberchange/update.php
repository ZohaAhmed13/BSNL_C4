<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Numberchange $model */

$this->title = 'Update Numberchange: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Numberchanges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="numberchange-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

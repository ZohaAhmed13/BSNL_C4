<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixroute $model */

$this->title = 'Update Prefixroute: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Prefixroutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prefixroute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

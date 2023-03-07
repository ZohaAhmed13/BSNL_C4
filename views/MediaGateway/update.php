<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mediagateway $model */

$this->title = 'Update Mediagateway: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Mediagateways', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mediagateway-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

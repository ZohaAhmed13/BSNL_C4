<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CallSource $model */

$this->title = 'Update Call Source: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Call Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="call-source-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

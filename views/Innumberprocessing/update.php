<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Innumberprocessing $model */

$this->title = 'Update Innumberprocessing: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Innumberprocessings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="innumberprocessing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

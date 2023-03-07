<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trunkgroup $model */

$this->title = 'Create Trunkgroup';
$this->params['breadcrumbs'][] = ['label' => 'Trunkgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trunkgroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

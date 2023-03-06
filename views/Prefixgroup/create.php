<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixgroup $model */

$this->title = 'Create Prefixgroup';
$this->params['breadcrumbs'][] = ['label' => 'Prefixgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefixgroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

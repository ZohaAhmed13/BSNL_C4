<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Numberchangegroup $model */

$this->title = 'Create Numberchangegroup';
$this->params['breadcrumbs'][] = ['label' => 'Numberchangegroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numberchangegroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

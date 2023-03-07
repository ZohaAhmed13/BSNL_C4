<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixanalysis $model */

$this->title = 'Create Prefixanalysis';
$this->params['breadcrumbs'][] = ['label' => 'Prefixanalyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefixanalysis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

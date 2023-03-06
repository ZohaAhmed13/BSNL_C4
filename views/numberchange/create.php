<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Numberchange $model */

$this->title = 'Create Numberchange';
$this->params['breadcrumbs'][] = ['label' => 'Numberchanges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numberchange-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

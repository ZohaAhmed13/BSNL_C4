<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mediagateway $model */

$this->title = 'Create Mediagateway';
$this->params['breadcrumbs'][] = ['label' => 'Mediagateways', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediagateway-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

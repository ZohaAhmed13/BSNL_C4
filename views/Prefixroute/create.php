<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prefixroute $model */

$this->title = 'Create Prefixroute';
$this->params['breadcrumbs'][] = ['label' => 'Prefixroutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefixroute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

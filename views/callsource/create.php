<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CallSource $model */

$this->title = 'Create Call Source';
$this->params['breadcrumbs'][] = ['label' => 'Call Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-source-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

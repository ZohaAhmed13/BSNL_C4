<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Softswitch $model */

$this->title = 'Create Softswitch';
$this->params['breadcrumbs'][] = ['label' => 'Softswitches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="softswitch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

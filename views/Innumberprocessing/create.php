<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Innumberprocessing $model */

$this->title = 'Create Innumberprocessing';
$this->params['breadcrumbs'][] = ['label' => 'Innumberprocessings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innumberprocessing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

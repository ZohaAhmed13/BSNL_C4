<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\NumberchangeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="numberchange-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'SourceNumber') ?>

    <?= $form->field($model, 'ChangedNumber') ?>

    <?= $form->field($model, 'NCgroup') ?>

    <?php // echo $form->field($model, 'Priority') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

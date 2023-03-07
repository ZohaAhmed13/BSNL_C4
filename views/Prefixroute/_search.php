<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PrefixrouteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prefixroute-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'SoftSwitch') ?>

    <?= $form->field($model, 'PrefixGroup') ?>

    <?= $form->field($model, 'Route1') ?>

    <?php // echo $form->field($model, 'Route2') ?>

    <?php // echo $form->field($model, 'Route3') ?>

    <?php // echo $form->field($model, 'Route4') ?>

    <?php // echo $form->field($model, 'Route5') ?>

    <?php // echo $form->field($model, 'Route6') ?>

    <?php // echo $form->field($model, 'Route7') ?>

    <?php // echo $form->field($model, 'Route8') ?>

    <?php // echo $form->field($model, 'CallSource') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PrefixanalysisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prefixanalysis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'SoftSwitch') ?>

    <?= $form->field($model, 'Anumber') ?>

    <?= $form->field($model, 'Bnumber') ?>

    <?php // echo $form->field($model, 'PrefixGroup') ?>

    <?php // echo $form->field($model, 'lcr_rule_id') ?>

    <?php // echo $form->field($model, 'A_GroupID') ?>

    <?php // echo $form->field($model, 'B_GroupID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

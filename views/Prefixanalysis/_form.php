<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Prefixanalysis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prefixanalysis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoftSwitch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Anumber')->textInput() ?>

    <?= $form->field($model, 'Bnumber')->textInput() ?>

    <?= $form->field($model, 'PrefixGroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lcr_rule_id')->textInput() ?>

    <?= $form->field($model, 'A_GroupID')->textInput() ?>

    <?= $form->field($model, 'B_GroupID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

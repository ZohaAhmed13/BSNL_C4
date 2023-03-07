<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Prefixroute $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prefixroute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoftSwitch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrefixGroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Route1')->textInput() ?>

    <?= $form->field($model, 'Route2')->textInput() ?>

    <?= $form->field($model, 'Route3')->textInput() ?>

    <?= $form->field($model, 'Route4')->textInput() ?>

    <?= $form->field($model, 'Route5')->textInput() ?>

    <?= $form->field($model, 'Route6')->textInput() ?>

    <?= $form->field($model, 'Route7')->textInput() ?>

    <?= $form->field($model, 'Route8')->textInput() ?>

    <?= $form->field($model, 'CallSource')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

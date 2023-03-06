<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Numberchange $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="numberchange-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SourceNumber')->textInput() ?>

    <?= $form->field($model, 'ChangedNumber')->textInput() ?>

    <?= $form->field($model, 'NCgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Priority')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

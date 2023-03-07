<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Innumberprocessing $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="innumberprocessing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoftSwitch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CallSource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TrunkGroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SourceID')->textInput() ?>

    <?= $form->field($model, 'AnumberGroup')->textInput() ?>

    <?= $form->field($model, 'BnumberGroup')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

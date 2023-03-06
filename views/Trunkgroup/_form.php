<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Trunkgroup $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="trunkgroup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoftSwitch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Route')->textInput() ?>

    <?= $form->field($model, 'MediaGateway')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DestinationIP')->textInput() ?>

    <?= $form->field($model, 'DestinationHostName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DestinationPort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CallSource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lcr_gw_id')->textInput() ?>

    <?= $form->field($model, 'Pre_Strip_cnt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pre_add_val')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Enable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A_GroupID')->textInput() ?>

    <?= $form->field($model, 'B_GroupID')->textInput() ?>

    <?= $form->field($model, 'RouteSource')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

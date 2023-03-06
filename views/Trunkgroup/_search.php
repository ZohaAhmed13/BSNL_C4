<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TrunkgroupSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="trunkgroup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'SoftSwitch') ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'Route') ?>

    <?php // echo $form->field($model, 'MediaGateway') ?>

    <?php // echo $form->field($model, 'DestinationIP') ?>

    <?php // echo $form->field($model, 'DestinationHostName') ?>

    <?php // echo $form->field($model, 'DestinationPort') ?>

    <?php // echo $form->field($model, 'CallSource') ?>

    <?php // echo $form->field($model, 'lcr_gw_id') ?>

    <?php // echo $form->field($model, 'Pre_Strip_cnt') ?>

    <?php // echo $form->field($model, 'Pre_add_val') ?>

    <?php // echo $form->field($model, 'Enable') ?>

    <?php // echo $form->field($model, 'A_GroupID') ?>

    <?php // echo $form->field($model, 'B_GroupID') ?>

    <?php // echo $form->field($model, 'RouteSource') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

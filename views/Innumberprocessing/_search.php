<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\InnumberprocessingSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="innumberprocessing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'SoftSwitch') ?>

    <?= $form->field($model, 'CallSource') ?>

    <?= $form->field($model, 'TrunkGroup') ?>

    <?php // echo $form->field($model, 'SourceID') ?>

    <?php // echo $form->field($model, 'AnumberGroup') ?>

    <?php // echo $form->field($model, 'BnumberGroup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

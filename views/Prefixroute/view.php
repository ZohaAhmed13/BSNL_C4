<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Prefixroute $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Prefixroutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prefixroute-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Name',
            'SoftSwitch',
            'PrefixGroup',
            'Route1',
            'Route2',
            'Route3',
            'Route4',
            'Route5',
            'Route6',
            'Route7',
            'Route8',
            'CallSource',
        ],
    ]) ?>

</div>

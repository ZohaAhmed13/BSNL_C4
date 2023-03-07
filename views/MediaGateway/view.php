<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mediagateway $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Mediagateways', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mediagateway-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Name',
            'SoftSwitch',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Softswitch $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Softswitches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="softswitch-view">

    <h1><?= Html::encode($this->title) ?></h1>

 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Name',
            'MysqlDB',
            'Redis',
        ],
    ]) ?>

</div>

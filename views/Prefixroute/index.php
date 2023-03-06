<?php

use app\models\Prefixroute;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PrefixrouteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prefixroutes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefixroute-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prefixroute', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'SoftSwitch',
            'PrefixGroup',
            'Route1',
            //'Route2',
            //'Route3',
            //'Route4',
            //'Route5',
            //'Route6',
            //'Route7',
            //'Route8',
            //'CallSource',
            [
                'class' => ActionColumn::className(),
                'header'=>'Action',
                'urlCreator' => function ($action, Prefixroute $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>

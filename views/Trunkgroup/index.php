<?php

use app\models\Trunkgroup;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TrunkgroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Trunkgroups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trunkgroup-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Trunkgroup', ['create'], ['class' => 'btn btn-success']) ?>
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
            'Type',
            'Route',
            //'MediaGateway',
            //'DestinationIP',
            //'DestinationHostName',
            //'DestinationPort',
            //'CallSource',
            //'lcr_gw_id',
            //'Pre_Strip_cnt',
            //'Pre_add_val',
            //'Enable',
            //'A_GroupID',
            //'B_GroupID',
            //'RouteSource',
            [
                'class' => ActionColumn::className(),
                'header'=>'Action',
                'urlCreator' => function ($action, Trunkgroup $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use app\models\Innumberprocessing;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\InnumberprocessingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Innumberprocessings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innumberprocessing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Innumberprocessing', ['create'], ['class' => 'btn btn-success']) ?>
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
            'CallSource',
            'TrunkGroup',
            //'SourceID',
            //'AnumberGroup',
            //'BnumberGroup',
            [
                'class' => ActionColumn::className(),
                'header'=>'Action',
                'urlCreator' => function ($action, Innumberprocessing $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>

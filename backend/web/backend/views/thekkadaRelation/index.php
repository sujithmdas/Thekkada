<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ThekkadaRelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thekkada Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thekkada-relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Thekkada Relation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'father_id',
            'mother_id',
            'spouse_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

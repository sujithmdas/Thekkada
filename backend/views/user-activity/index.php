<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'activity',
            'action',
            'activity_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

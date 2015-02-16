<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ThekkadaRelation */

$this->title = 'Update Thekkada Relation: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Thekkada Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thekkada-relation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ThekkadaRelation */

$this->title = 'Create Thekkada Relation';
$this->params['breadcrumbs'][] = ['label' => 'Thekkada Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thekkada-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

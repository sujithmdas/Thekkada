<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Courtyard */

$this->title = 'Create Courtyard';
$this->params['breadcrumbs'][] = ['label' => 'Courtyards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courtyard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

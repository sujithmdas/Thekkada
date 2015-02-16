<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CourtyardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courtyard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'owner_id') ?>

    <?= $form->field($model, 'post') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'posted_at') ?>

    <?php // echo $form->field($model, 'likes') ?>

    <?php // echo $form->field($model, 'dislikes') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

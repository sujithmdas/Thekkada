<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\ThekkadaRelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thekkada-relation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(User::find()->all(),'id', 'nickname'), ['prompt'=>'']) ?>

    <?= $form->field($model, 'father_id')->dropDownList(ArrayHelper::map(User::find()->all(),'id', 'nickname'), ['prompt'=>'']) ?>

    <?= $form->field($model, 'mother_id')->dropDownList(ArrayHelper::map(User::find()->all(),'id', 'nickname'), ['prompt'=>'']) ?>

    <?= $form->field($model, 'spouse_id')->dropDownList(ArrayHelper::map(User::find()->all(),'id', 'nickname'), ['prompt'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

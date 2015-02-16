<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'office_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'smoked')->dropDownList([ 'N' => 'N', 'Y' => 'Y', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

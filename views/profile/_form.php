<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserID')->textInput() ?>

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MiddleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'State')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateOfBirth')->textInput() ?>

    <?= $form->field($model, 'MeansOfIdentification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdentificationNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreatedAt')->textInput() ?>

    <?= $form->field($model, 'UpdatedAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

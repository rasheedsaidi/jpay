<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'MiddleName') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'State') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'Phone') ?>

    <?php // echo $form->field($model, 'Occupation') ?>

    <?php // echo $form->field($model, 'DateOfBirth') ?>

    <?php // echo $form->field($model, 'MeansOfIdentification') ?>

    <?php // echo $form->field($model, 'IdentificationNumber') ?>

    <?php // echo $form->field($model, 'CreatedAt') ?>

    <?php // echo $form->field($model, 'UpdatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

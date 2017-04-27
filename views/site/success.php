<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Pjax;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
use app\models\Utility;

$this->title = 'My Yii Application';
?>
<div class="container">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-6 col-md-offset-3">
                <div class="well">
                    <h3 class="text-center">Registration successful! Please <?= Html::a('click here', ['profile/login']) ?> to login.</h3>
                </div>
            </div>
        </div>
    </div>
</div>

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
            <div class="well user-form"style="float: left;width: 100%;">
                <h4>Hello, please enter your email address below:</h4>
                <div class="loading"><img src="<?php echo Utility::baseURL(); ?>web/images/animated_progress.gif"/></div>
<?php 
Pjax::begin([
    // Pjax options
    //'formSelector' => 'user-form'
]);
?>
                <?php $form = ActiveForm::begin([
                    'options' => ['data' => ['pjax' => true], 'data-pjax' => 0],
                ]); ?>

                <h1><?= $response ?></h1>

        <?= $form->field($model, 'FirstName')->textInput(['autofocus' => true, 'placeholder' => 'Please enter your first name'])->label(false) ?>

        <?= $form->field($model, 'Email')->textInput(['placeholder' => 'Enter email address'])->label(false) ?>        

        <div class="form-group">
                <?= Html::submitButton('Confirm email', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); 
    Pjax::end();
    ?>                
            </div>
            </div>
        </div>
    </div>
</div>

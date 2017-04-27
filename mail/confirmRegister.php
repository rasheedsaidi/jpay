<?php

use yii\helpers\Url;
use yii\helpers\Html;

/**
 * @var string $subject
 * @var \amnah\yii2\user\models\User $user
 * @var \amnah\yii2\user\models\Profile $profile
 * @var \amnah\yii2\user\models\UserToken $userToken
 */

$confirm_url = Url::toRoute(["/profile/login"], true);
?>

<h2><?= $data['subject'] ?></h2>

<h3>Dear <?= $data['FirstName'] ?>,</h3>

<p>Thank you for registering on JPay Portal. You\'ve now successfully completed your registration.</p>

<p><?= Html::a('Login to your profile', $confirm_url) ?></p>
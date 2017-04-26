<?php

use yii\helpers\Url;
use yii\helpers\Html;

/**
 * @var string $subject
 * @var \amnah\yii2\user\models\User $user
 * @var \amnah\yii2\user\models\Profile $profile
 * @var \amnah\yii2\user\models\UserToken $userToken
 */

$confirm_url = Url::toRoute(["/site/confirm", "token" => $data['Token']], true);
?>

<h2><?= $data['subject'] ?></h2>

<h3>Dear <?= $data['FirstName'] ?>,</h3>

<p>Thank you for registering on JPay Portal. Please confirm your email address by clicking the link below:</p>

<p><?= Html::a('Confirm my email address', $confirm_url) ?></p>
<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\base\Model;

class Utility extends Model
{
	public static function startSession() {
        $session = Yii::$app->session;
        if (!$session->isActive)
            $session->open();
    }

    public static function isLoggedIn() {
        return !Yii::$app->user->isGuest;
    }

    public static function checkLogin() {
        //$purchase_id = self::getPurchaseID(); //var_dump(self::isLoggedIn());exit;
        if(!self::isLoggedIn()) {           
            $url = urldecode($path);
            self::startSession();
            $_SESSION['redirectUrl'] = $url;
            $alert = ($msg && !empty($msg))? $msg: 'You must be logged-in to perform the requested operation.';
            Yii::$app->session->setFlash('pleaseLogin', $msg);
            return false;
        }
        return true;
    }

    public static function stateList()
    {
        $states = array();
        $vstate = State::find()->all();
        foreach($vstate as $s) {
            $states[$s['ID']] =  $s['Name'];
        }
        return $states;
    }

    public static function countryList()
    {
        $states = array();
        $vstate = Country::find()->all();
        foreach($vstate as $s) {
            $states[$s['id']] =  $s['name'];
        }
        return $states;
    }

    public static function userRef()
    {
        $refPrefix = "USERREF";
        
        $now =  gmdate("Ymd-H-i-s");
        
        $refno = $refPrefix.$now."-".self::generatePassword();
        
        return $refno;
    }

    public static function generatePassword()
    {
        $length = 5;
        // start with a blank password
        $password = "";

         // define possible characters
        $possible = "0123456789";//-$#@*"; 
    
        // set up a counter
        $i = 0; 
    
        // add random characters to $password until $length is reached
        while ($i < $length) { 

         // pick a random character from the possible ones
          $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
        
          // we don't want this character if it's already in the password
          if (!strstr($password, $char)) { 
            $password .= $char;
           $i++;
            }
         }
        return $password;

    }

    public function checkUser()
    {
        Utility::startSession();
        $return_url = Url::toRoute(['site/index'], true);
        if(isLoggedIn()) {
            return $this->redirect(['user/login']);
            //echo 'got here';exit;
        }
    }

    public static function sendEmail($template, $email, $subject, $data) {
        $mailer = Yii::$app->mailer;
        $result = $mailer->compose($template, ['data' => $data])
            ->setTo($email)
            ->setSubject($subject)
            ->send();
    }

    public static function confirmEmail($email, $subject, $data) {
    	self::sendEmail('confirmEmail', $email, $subject, $data);
    }

    public static function confirmRegistration($email, $subject, $data) {
    	self::sendEmail('confirmRegister', $email, $subject, $data);
    }

    static function baseURL() {
        return Yii::$app->request->baseUrl .'/';
    }
}

?>
<?php

namespace app\controllers;

use Yii;

class WebhookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionVerify() {
    	$post = Yii::$app->request->post();
    	$file = Yii::$app->request->baseUrl .'/'.'people.txt';
		// The new person to add to the file
		$person = json_encode($post);
		// Write the contents to the file, 
		// using the FILE_APPEND flag to append the content to the end of the file
		// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
		file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
    	if ($post['hub']['mode'] === 'subscribe' && $post['hub']['verify_token'] === "testing-messenger-bot") {
		    return json_encode($post['hub']['challenge']);
		    //res.status(200).send(req.query['hub.challenge']);
		  } else {
		    //console.error("Failed validation. Make sure the validation tokens match.");
		    return false;          
		  } 
    	return json_encode($post = Yii::$app->request->post());

    }

}

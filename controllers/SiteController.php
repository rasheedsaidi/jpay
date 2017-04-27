<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Utility;
use app\models\User;
use app\models\Profile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction1($action)
    {
        Utility::startSession();
        $return_url = Url::toRoute(['/jpay/' . $action->id], true);
        if(!Utility::checkLogin($return_url, 'You must be logged-in to view the requested page. Please login or sign up.')) {
            return $this->redirect(['user/login']);
            //echo 'got here';exit;
        }
    
        return parent::beforeAction($action);
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new User();
        $response = '';
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                $date = date('Y-m-d H:i:s');
                $token = \Yii::$app->security->generateRandomString();
                $data = array();
                $data['FirstName'] = $model->FirstName;
                $data['Email'] = $model->Email;
                $subject = 'Comfirm your email';
                $data['subject'] = $subject;
                $data['Token'] = $token;
                Utility::confirmEmail($model->Email, $subject, $data);
                $model->Token = $token;
                $model->Status = 0;
                $model->CreatedAt = $date;
                $model->save(false);
                //return $this->goBack();
                $response = "Success!";
           
        }

        return $this->render('index', compact('model', 'response'));
    }

    public function actionConfirm()
    {
        $token = (isset($_REQUEST) && isset($_REQUEST['token']))? $_REQUEST['token']: '';
        $user = User::find()->where(['Token' => $token])->one();
        $response = ''; //var_dump(intval($user->Status) === 2);exit;
        if ($user) {
            if(intval($user->Status) === 2) {
                return $this->redirect('index');
            }
            Utility::startSession();
            $_SESSION['FirstName'] = $user->FirstName;
            $_SESSION['Token'] = $user->Token;
            $user->Status = 1;
            $user->save(false);
            return $this->redirect('register');
        }

        return $this->render('confirm', compact('user'));
    }

    public function actionRegister()
    {
        Utility::startSession(); //var_dump($_POST);exit;
        $token = (isset($_SESSION) && isset($_SESSION['Token']))? $_SESSION['Token']: '';        
        $response = '';
        if (!$token) {
            return $this->redirect('index');
        }
        $user = User::find()->where(['Token' => $token])->one();
        if($user && $user->Status == 2) {
            throw new \yii\web\ForbiddenHttpException('A user with email ' . $user->Email .' has already registered');
        }
        $model = new Profile();

        if ($user && $model->load(Yii::$app->request->post())) {            
            $date = date('Y-m-d H:i:s');
            $token = \Yii::$app->security->generateRandomString();
            $data = array();
            $data['FirstName'] = $model->FirstName;
            $data['Email'] = $user->Email;
            $subject = 'Registration Confirmation';
            $data['subject'] = $subject;
            Utility::confirmRegistration($user->Email, $subject, $data);
            $model->UserID = $user->ID;
            $model->CreatedAt = $date;
            $model->save(false);
            $user->Status = 2;
            $user->save(false);
            $response = "Success!";
            return $this->redirect('success');
        }

        return $this->render('register', compact('model'));
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }
}

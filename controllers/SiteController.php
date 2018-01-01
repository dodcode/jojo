<?php

namespace app\controllers;

use app\models\EntryForm;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'test'], // ACF should only be applied to these actions.
                'rules' => [
                    // all guest users can access login action.
                    [
                        'allow' => true, // specifies whether this is an "allow" or "deny" rule.
                        'actions' => ['login'], // specifies which actions this rule matches.
                        'roles' => ['?'], // guest users. (not authenticated yet).
                        // specifies which request method this rule matches.
                        'verbs' => ['get', 'post']
                    ],
                    // when guest is forbidden, Yii will redirect guest to login page.
//                    [
//                        'allow' => false,
//                        'actions' => ['test'],
//                        'roles' => ['?'],
//                        'verbs' => ['get'],
//                    ],

                    // all authenticated users can access logout action.
                    // !!!! You should not forbid people to logout,
                    // otherwise, Yii will redirect people to login page.
//                    [
//                        'allow' => true,
//                        'actions' => ['logout'],
//                        'roles' => ['@'], // authenticated users.
                        // specifies which request method this rule matches.
//                        'verbs' => ['post'],
//                    ],
                ],

                // when the rules deny the access, this callback should be called.
//                'denyCallback' => function ($rule, $action) {
//                    return $this->redirect(Url::to('/'));
//                }
            ],
        ];
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
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
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Url::to('/'));
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
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

    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

    /**
     * @return string|Response
     * @throws \yii\base\Exception
     */
    public function actionSignUp()
    {
        if (\Yii::$app->request->isPost) {

            if (get_post('password') != get_post('password_repeat')) {
                return $this->asJson([
                    'code' => 1,
                    'message' => '两次密码不一致！'
                ]);
            }

            $user = new \app\models\User();
            $user->username = get_post('username');
            $user->password = get_security()->generatePasswordHash(get_post('password'));
            $user->auth_key = get_security()->generateRandomString();

            if ($user->save()) {
                return $this->redirect(Url::to('/'));
            } else {
                var_dump($user->getErrors());
                exit();
            }
        } else {
            $model = new \app\models\User();

            return $this->render('@views/site/sign-up', [
                'model' => $model,
            ]);
        }
    }

    public function actionTest() {
        die('test');
    }
}

<?php

namespace app\controllers;

use app\models\Article;
use app\models\EntryForm;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Markdown;
use yii\helpers\Url;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;

class FrontController extends BaseController
{
    public $layout = false;

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
        $article = Article::find()->offset(0)->limit(1)->orderBy(['updated_at' => SORT_DESC])->one();
        return $this->render('index', [
            'article' => $article
        ]);
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
        return $this->render('login');
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
}

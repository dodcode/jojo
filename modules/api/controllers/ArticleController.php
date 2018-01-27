<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 31/12/2017
 * Time: 8:54 PM
 */

namespace app\modules\api\controllers;

use yii\filters\AccessControl;

class ArticleController extends BaseController
{
    public $modelClass = 'app\models\Article';


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                // all guest users can access login action.
                [
                    'allow' => true, // specifies whether this is an "allow" or "deny" rule.
                    'actions' => [], // specifies which actions this rule matches.
                    'roles' => ['@'],
                    // specifies which request method this rule matches.
                    'verbs' => ['get', 'post', 'put', 'delete', 'options']
                ],
                [
                    'allow' => true,
                    'actions' => [],
                    'roles' => ['?']
                ]
            ],
            'denyCallback' => function ($rule, $action) {
                throw new \Exception('access denied!', 403);
            }
        ];
        return $behaviors;
    }


    public function actions()
    {
        $actions = parent::actions();
        $actions['create']['class'] = 'app\modules\api\actions\article\CreateAction';
        $actions['index']['class'] = 'app\modules\api\actions\article\IndexAction';
        return $actions;
    }
}
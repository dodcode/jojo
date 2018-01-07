<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 31/12/2017
 * Time: 8:54 PM
 */

namespace app\modules\api\controllers;


use app\modules\api\filters\AccessFilter;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\rest\ActiveController;

class ArticleController extends BaseController
{
    public $modelClass = 'app\models\Article';

    // Customize Actions.
//    public function actions() {
//        $actions = parent::actions();
//        $actions['index']['prepareDataProvider'] = [$this, 'index'];
//        return $actions;
//    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'only' => ['index'], // ACF should only be applied to these actions.
            'rules' => [
                // all guest users can access login action.
                [
                    'allow' => true, // specifies whether this is an "allow" or "deny" rule.
                    'actions' => ['index'], // specifies which actions this rule matches.
                    'roles' => ['admin'],
                    // specifies which request method this rule matches.
                    'verbs' => ['get', 'post']
                ],
            ],
//                'denyCallback' => function ($rule, $action) {
//                    return ['a' => 2];
//                }
        ];
        return $behaviors;
    }

//    public function index() {
//        $modelClass = $this->modelClass;
//        $dataProvider = new ActiveDataProvider([
//            'query' => $modelClass::find()
//        ]);
//
//        return $dataProvider;
//    }
}
<?php
/**
 * Created by PhpStorm.
 * User: rex

 * Date: 30/12/2017
 * Time: 3:01 PM
 */

namespace app\controllers;


use yii\filters\AccessControl;
use yii\rest\ActiveController;

class RestController extends ActiveController
{
    public $modelClass = 'app\models\Article';

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
                    'roles' => ['?'],
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
}
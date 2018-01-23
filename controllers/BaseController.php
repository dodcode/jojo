<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 31/10/2017
 * Time: 4:21 PM
 */

namespace app\controllers;


use yii\web\Controller;

class BaseController extends Controller
{

    public static function request()
    {
        return \Yii::$app->request;
    }

    public static function response()
    {
        return \Yii::$app->response;
    }

    public static function post($name = null, $defaultValue = null)
    {
        return static::request()->post($name, $defaultValue);
    }

    public static function get($name = null, $defaultValue = null)
    {
        return static::request()->get($name, $defaultValue);
    }

    public static function security()
    {
        return \Yii::$app->getSecurity();
    }
}
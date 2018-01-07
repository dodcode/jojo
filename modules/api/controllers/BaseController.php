<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 07/01/2018
 * Time: 5:36 PM
 */

namespace app\modules\api\controllers;


use yii\rest\ActiveController;

class BaseController extends ActiveController
{
    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        // For testing vue-client. You should remove this method in production mode.
        $headers = get_response()->headers;
        $headers->set('Access-Control-Allow-Origin', '*');
    }
}
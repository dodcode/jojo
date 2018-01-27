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

        // Allow browser to catch these response headers.
        $headers = get_response()->headers;
        $headers->set('Access-Control-Expose-Headers',
            'X-Pagination-Current-Page,X-Pagination-Page-Count,X-Pagination-Per-Page,X-Pagination-Total-Count');

        // For testing vue-client. You should remove these settings in production mode.
        if (YII_ENV_DEV) {
            $headers->set('Access-Control-Allow-Origin', '*');
            $headers->set('Access-Control-Allow-Methods', '*');
        }
    }
}
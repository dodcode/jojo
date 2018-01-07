<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 07/01/2018
 * Time: 11:09 AM
 */

namespace app\modules\api\controllers;


use yii\rest\ActiveController;

class SecurityController extends ActiveController
{

    /**
     * get csrf tags.
     *
     * @return array
     */
    public function actionCsrfTags() {
        return [
            'csrf-param' => get_request()->csrfParam,
            'csrf-token' => get_request()->getCsrfToken()
        ];
    }
}
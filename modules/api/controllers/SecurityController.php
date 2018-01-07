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

class SecurityController extends BaseController
{
    public $modelClass = 'app\modules\api\models\Security';

    /**
     * get csrf tags.
     *
     * @return array
     */
    public function actionCsrf() {
        return [
            'csrf_param' => get_request()->csrfParam,
            'csrf_token' => get_request()->getCsrfToken()
        ];
    }
}
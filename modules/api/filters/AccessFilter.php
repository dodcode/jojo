<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 31/12/2017
 * Time: 9:53 PM
 */

namespace app\modules\api\filters;


use Yii;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;
use yii\web\Response;

class AccessFilter extends AccessControl
{

    /**
     * @param false|\yii\web\User $user
     * @return void
     * @throws ForbiddenHttpException
     */
    protected function denyAccess($user){

//        $request = get_app()->request;
//        $accept = $request->getHeaders()->get('Accept');
//        $type = substr($accept, strpos($accept, '/') + 1);
//
//        $response = get_app()->response;
//        $response->format = Response::FORMAT_RAW;
//        if (in_array($type, [
//            Response::FORMAT_HTML,
//            Response::FORMAT_JSON,
//            Response::FORMAT_JSONP,
//            Response::FORMAT_RAW,
//            Response::FORMAT_XML
//        ])) {
//            $response->format = $type;
////            $response->data = ['code' => 403, 'message' => 'You are not allowed to perform this action.'];
//        }

        //
        throw new ForbiddenHttpException(translate('yii', 'You are not allowed to perform this action.'));
    }
}
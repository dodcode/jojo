<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 07/01/2018
 * Time: 4:53 PM
 */

namespace app\modules\api\models;


use yii\base\Model;

/**
 * Class Security
 * @package app\modules\api\models
 *
 * @property string $csrfParam
 * @property string $csrfToken
 */

class Security extends Model
{

    /**
     * @return mixed|string
     */
    public function getCsrfParam() {
        return get_request()->csrfParam;
    }

    /**
     * @return string
     */
    public function getCsrfToken() {
        return get_request()->getCsrfToken();
    }
}
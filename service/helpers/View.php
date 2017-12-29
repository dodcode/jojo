<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 01/12/2017
 * Time: 8:36 PM
 */

namespace app\service\helpers;


class View
{
    /**
     * 生成csrf隐藏域
     *
     * @return string
     */
    public static function csrfField() {
        return '<input type="hidden" name="_csrf" value="'.get_request()->getCsrfToken().'">';
    }
}
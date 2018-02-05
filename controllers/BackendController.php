<?php
/**
 * Created by PhpStorm.
 * User: rex

 * Date: 10/01/2018
 * Time: 11:09 PM
 */

namespace app\controllers;


class BackendController extends BaseController
{
    public $layout = false;

    public function actionIndex() {
        return $this->render('index');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 24/11/2017
 * Time: 12:30 AM
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <form class="form-horizontal" role="form" method="POST" action="<?= \yii\helpers\Url::to('/site/sign-up');?>">
        <?= \app\service\helpers\View::csrfField(); ?>
        <div class="form-group">
            <label for="username" class="col-md-2 control-label">User name</label>
            <div class="col-md-3">
                <input type="text" id="username" class="form-control" name="username">
                <span class="help-block">
                    <strong></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-2 control-label">Password</label>
            <div class="col-md-3">
                <input type="password" id="password" class="form-control" name="password">
                <span class="help-block">
                    <strong></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="password_repeat" class="col-md-2 control-label">Repeat password</label>
            <div class="col-md-3">
                <input type="password" id="password_repeat" class="form-control" name="password_repeat">
                <span class="help-block">
                    <strong></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Register
                </button>
            </div>
        </div>
    </form>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
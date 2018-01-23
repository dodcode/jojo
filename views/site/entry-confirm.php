<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 30/10/2017
 * Time: 9:41 PM
 */

use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li>
        <label>Name</label>:<?= Html::encode($model->name) ?></li>
    </li>
    <li>
        <label>Email</label>: <?= Html::encode($model->email) ?></li>
    </li>
</ul>

<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 08/01/2018
 * Time: 5:24 PM
 */

namespace app\modules\api\controllers;



use Intervention\Image\ImageManagerStatic as Image;

class GraphicController extends BaseController
{
    public $modelClass = 'app\modules\api\models\Graphic';

    public function actionCompoundAvatar() {
        // define the output file.
        $file = get_alias('@app').'/web/static/img/event1/compound.png';
        // create the background image.
        $im = imagecreatetruecolor(480, 640);

        // create some colors.
        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im,0 ,0, 0);
        imagefilledrectangle($im, 0, 0, 480, 120, $white);

        // The text to draw
        $text = '我能解锁你的iPhone X，因为我的眼里都是你。';
        $font = get_alias('@app').'/web/msyh.ttf';

        // Add some shadow to the text
        // 这里阴影的实现，其实是在原文字的基础上覆盖了一层别的颜色的文字，
        // 两个文字图像的坐标不同而已。
        imagettftext($im, 14, 0, 11, 21, $grey, $font, $text);
        // Add the text
        imagettftext($im, 14, 0, 10, 20, $black, $font, $text);


        // portrait
//        $portrait = imagecreatefromjpeg('http://img3.duitang.com/uploads/item/201510/03/20151003095922_3nV24.thumb.700_0.jpeg');



        // Using imagepng() results in clearer text compared with imagejpeg()
        imagepng($im, $file);
        imagedestroy($im);

//        $path_1 = 'https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png';
//        $path_2 = 'http://tb1.bdstatic.com/tb/static-client/img/webpage/wap_code.png';
//        $image_1 = imagecreatefrompng($path_1);
//        $image_2 = imagecreatefrompng($path_2);
//        imagecopymerge($image_1, $image_2, 0, 0, 0, 0, imagesx($image_2), imagesy($image_2), 100);
//        imagepng($image_1, $file);

        return [
            'url' => get_request()->hostInfo.'/compound.png'
        ];
    }

    public function actionCompound() {
        $file = get_alias('@app').'/web/static/img/event1/compound.png';
        $font_path = get_alias('@app').'/web/static/img/event1/msyh.ttf';
        $mask_path = get_alias('@app').'/web/static/img/event1/bg_circle.png';
        $portrait_url = 'http://img3.duitang.com/uploads/item/201510/03/20151003095922_3nV24.thumb.700_0.jpeg';

        $potrait = Image::make($portrait_url);
        $potrait->widen(128);

        $mask = Image::make($mask_path);

        $bg = Image::canvas(320, 480, '#ccc');
        $bg->insert($potrait->getCore(), 'top-left', 100, 140);
        $bg->insert($mask->getCore());
        $bg->text('瓜皮猫，萌萌哒！', 80, 120, function ($font) use ($font_path) {
            $font->file($font_path);
        });

//        $bg->circle(100, 50, 50, function ($draw) {
//            $draw->background('#0000ff');
//            $draw->border(1, '#f00');
//        });
        $bg->save($file);

        return [
            'url' => get_request()->hostInfo.'/compound.png'
        ];
    }
}
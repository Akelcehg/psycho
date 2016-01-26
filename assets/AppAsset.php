<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/client/nicdark_style.css',
        'css/client/nicdark_responsive.css',
        'css/client/revslider/settings.css',
        'http://fonts.googleapis.com/css?family=Montserrat:400,700',
        'http://fonts.googleapis.com/css?family=Raleway',
        'http://fonts.googleapis.com/css?family=Montez',
    ];
    public $js = [
        'js/client/main/jquery.min.js',
        'js/client/main/jquery-ui.js',
        'js/client/main/excanvas.js',
        'js/client/plugins/revslider/jquery.themepunch.tools.min.js',
        'js/client/plugins/revslider/jquery.themepunch.revolution.min.js',
        'js/client/plugins/menu/superfish.min.js',
        'js/client/plugins/menu/tinynav.min.js',
        'js/client/plugins/isotope/isotope.pkgd.min.js',
        'js/client/plugins/mpopup/jquery.magnific-popup.min.js',
        'js/client/plugins/scroolto/scroolto.js',
        'js/client/plugins/nicescrool/jquery.nicescroll.min.js',
        'js/client/plugins/inview/jquery.inview.min.js',
        'js/client/plugins/parallax/jquery.parallax-1.1.3.js',
        'js/client/plugins/countto/jquery.countTo.js',
        'js/client/plugins/countdown/jquery.countdown.js',
        'js/client/init.js',
        'js/client/ckeditor.js',
        'js/client/sample.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
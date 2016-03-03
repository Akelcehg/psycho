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
        'css/client/style.css',
        'css/client/color3.css',
        'css/client/transitions.css',
        'css/client/bootstrap.css',
        'css/client/bootstrap-responsive.css',
        'css/client/jquery.bxslider.css',
        'css/client/owl.carousel.css',
        'css/client/font-awesome.min.css',
        'css/client/parallax.css',
        'css/client/custom_styles.css',

        /*'css/client/nicdark_responsive.css',
        'css/client/revslider/settings.css',
        'css/client/map.css',
        'css/client/style.css',*/

    ];
    public $js = [
        'js/client/jquery-1.11.0.min.js',
        'js/client/bootstrap.min.js',
        'js/client/jquery.bxslider.min.js',
        'https://maps.googleapis.com/maps/api/js?v=3.exp',
        'js/client/owl.carousel.js',
        'js/client/modernizr.js',
        'js/client/skrollr.min.js',
        'js/client/functions.js',
        'js/client/card_blur.js',


        //'js/client/main/jquery.min.js',
        /*'js/client/main/jquery-ui.js',
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
        'js/client/plugins/countdown/jquery.countdown.js',*/
        //"https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&libraries=places",

        //'https://maps.googleapis.com/maps/api/js?language=ru&key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&libraries=places&callback=initAutocomplete',

        /*'js/client/init.js',*/
        /*'js/client/ckeditor.js',*/
        /*'js/client/sample.js',
        'js/client/flex.js',
        'js/client/scripts.js',*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
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
class AdminAppAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'css/admin/sb-admin.css',
        'css/admin/plugins/morris.css',
        'css/admin/font-awesome/css/font-awesome.min.css',
        'css/admin/style.css',*/
        'css/admin/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'css/admin/bower_components/metisMenu/dist/metisMenu.min.css',

        'css/admin/dist/css/sb-admin-2.css',

        'css/admin/bower_components/font-awesome/css/font-awesome.min.css'
    ];

    public $js = [
        /*'js/admin/jquery.js',
        'js/admin/bootstrap.min.js',

        'js/admin/custom.js',*/

        //'js/admin/bower_components/jquery/dist/jquery.min.js',
        'js/admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'js/admin/bower_components/metisMenu/dist/metisMenu.min.js',
        'js/admin/dist/js/sb-admin-2.js',
        'js/admin/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

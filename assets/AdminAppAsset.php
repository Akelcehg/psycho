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
class AdminAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/admin/bootstrap.min.css',
        'css/admin/metisMenu.min.css',
        'css/admin/timeline.css',
        'css/admin/sb-admin-2.css',
        'css/admin/morris.css',
        'css/admin/font-awesome.min.css',
    ];
    public $js = [
        'js/admin/bootstrap.min.js',
        'js/admin/metisMenu.min.js',
        'js/admin/raphael-min.js',
        'js/admin/morris.min.js',
        'js/admin/morris-data.js',
        'js/admin/sb-admin-2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

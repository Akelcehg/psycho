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
        'css/admin/sb-admin.css',        
        'css/admin/plugins/morris.css',
        'css/admin/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'js/admin/bootstrap.min.js',
        'js/admin/plugins/morris/raphael.min.js',
        'js/admin/plugins/morris/morris.min.js',
        'js/admin/plugins/morris/morris-data.js',
        'js/admin/plugins/flot/jquery.flot.js',
        'js/admin/plugins/flot/jquery.flot.tooltip.min.js',
        'js/admin/plugins/flot/jquery.flot.resize.js',
        'js/admin/plugins/flot/jquery.flot.pie.js',
        'js/admin/plugins/flot/flot-data.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

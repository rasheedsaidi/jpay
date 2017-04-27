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
        
        'web/css/select2.min.css',
        //'web/css/select2-bootstrap.min.css',
        'web/css/plugins.min.css',
        'web/css/components.min.css',
        'web/css/site.css',
    ];
    public $js = [
        'web/plugins/js/select2.full.min.js',
        'web/plugins/js/jquery.validate.min.js',
        'web/plugins/js/additional-methods.min.js',
        'web/plugins/js/jquery.bootstrap.wizard.min.js',
        'web/plugins/js/form-wizard.js',
        'web/plugins/js/app.min.js',
        'web/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

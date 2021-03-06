<?php
// +----------------------------------------------------------------------
// | Amango [ 芒果一站式微信营销系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.Amango.net All rights reserved.
// +----------------------------------------------------------------------
// | Author: ChenDenlu <530003247@vip.qq.com>
// +----------------------------------------------------------------------

/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    'WEIXIN_TRACE'    => false,
    'URL_MODEL'       => 2,     //URL模式
    'URL_ROUTER_ON'   => true,  //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
          ':hash\w'     => array('Weixin/Index/index'),
       ),
    //自动加载函数
    "LOAD_EXT_FILE"      => 'tool', 
    //关闭页面调试
    'SHOW_PAGE_TRACE'    => false,
    //命名空间自动加载
    'AUTOLOAD_NAMESPACE' => array(
            'Bundle'             => APP_PATH.'Bundle',
            'Addons'             => 'Addons',
       ),
    );
?>

<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
use \Workerman\Worker;

// 自动加载类
require_once __DIR__ . '/../../Workerman/Autoloader.php';
require_once __DIR__ . '/../../Logger/Autoloader.php';
$log_server = new \Logger\Server( '0.0.0.0:2207' );

// 如果不是在根目录启动，则运行runAll方法
if (! defined ( 'GLOBAL_START' )) {
	Worker::runAll ();
}


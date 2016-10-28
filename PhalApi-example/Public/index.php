<?php
/**
 * $APP_NAME 统一入口
 */

require_once dirname(__FILE__) . '/init.php';

DI()->gearman = new Gearman_Lite(DI()->config->get('app.gearman'));

//装载你的接口
DI()->loader->addDirs('Demo');

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();


<?php
/**
 * Created by PhpStorm.
 * User: Axios
 * Date: 2016/10/28
 * Time: 17:29
 */

class Api_Index extends PhalApi_Api {

    public function getRules() {
        return array(
            'index' => array(
                'username' 	=> array('name' => 'username', 'default' => 'PHPer', ),
            ),
        );
    }

    /**
     * 默认接口服务
     * @return string title 标题
     * @return string content 内容
     * @return string version 版本，格式：X.X.X
     * @return int time 当前时间戳
     */
    public function index() {
        return DI()->gearman->task('default.index',['send'=>'Hello World!']);
    }
}

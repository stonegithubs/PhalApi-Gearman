<?php
/**
 * 请在下面放置任何您需要的应用配置
 */

return array(

    /**
     * 应用接口层的统一参数
     */
    'apiCommonRules' => array(
        //'sign' => array('name' => 'sign', 'require' => true),
    ),
    'gearman'=>array(
        "servers"=>"127.0.0.1:4730",
        "task"=>array(
            'testTask'         =>  "Test.task",
        )
    ),
);

<?php
/**
 * Created by PhpStorm.
 * User: 36krphplirui
 * Date: 2019/2/13
 * Time: 下午3:10
 * 统一入口
 */

use Family\Family;

require dirname(__DIR__).DIRECTORY_SEPARATOR.'framework'.DIRECTORY_SEPARATOR.'Family'
    .DIRECTORY_SEPARATOR.'family.php';

Family::run();
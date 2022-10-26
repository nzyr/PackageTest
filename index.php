<?php

/**
 * Each engineer has a duty to keep the code elegant
 * Created by wuyuchuan at 2022/10/26 2:28 PM
 */

use PackageTest\Verify;

header('content-type:text/html;charset=utf-8');

include './vendor/autoload.php';

$var = (new Verify())->isIPAddress('127.0.0.1');

var_dump($var);
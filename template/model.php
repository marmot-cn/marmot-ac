<?php

//1. 定位
//2. 需要使用策略模式生成模板


//通过反射定位class
//找见所有变量
//循环所有变量, 根据注释定位 type(@param), retur返回
//定位文件
//嵌入模板

require_once '../../dst/src/Member/Model/Member.php';

$reflectionClass = new ReflectionClass('User\Model\User');
var_dump($reflectionClass->getDefaultProperties());
var_dump($reflectionClass->getProperty('id')->getDocComment());
var_dump($reflectionClass->getEndLine());


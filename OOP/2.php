<?php
/**
 * Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.
 * Привести массив к объекту. Проанализировать результат при помощи var_dump.
 */

$arr = ['name'=>'name','email'=>'email','message'=>'message'];

$obj = (object)$arr;
var_dump($obj);

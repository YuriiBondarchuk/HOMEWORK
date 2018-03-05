<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 31.01.2018
 * Time: 10:58
 */
error_reporting(E_ALL);
$message = 'привет';

// Без "use"
$example = function () {
    var_dump($message);
};
$example();

// Наследуем $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Значение унаследованной переменной задано там, где функция определена,
// но не там, где вызвана
$message = 'мир';
$example();

// Сбросим message
$message = 'привет';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Измененное в родительской области видимости значение
// остается тем же внутри вызова функции
$message = 'мир';
echo $example();

// Замыкания могут принимать обычные аргументы
$example = function ($arg) use ($message) {
    var_dump($arg . ', ' . $message);
};
$example("привет");
<?php
require_once __DIR__ . '/Car2.php';
require_once __DIR__ . '/ContactForm.php';

$post =  $_POST;

$ContactForm = new ContactForm();
$ContactForm ->brand=$post['brand'];
$ContactForm->model=$post['model'];
$ContactForm->year=$post['year'];

var_dump($ContactForm);
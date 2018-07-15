<?php

class Template
{
    function render($template, array $variables = [])
    {

        $viewsPath = config::get('viewsPath');

        require_once "{$viewsPath}/{$template}.html";

    }
}
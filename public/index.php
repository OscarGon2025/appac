<?php

$_SERVER['APP_ENV'] = 'prod';
$_SERVER['APP_DEBUG'] = false;


use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

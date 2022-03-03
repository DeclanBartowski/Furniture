<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Loader;
use TQ\Tools\Handlers\Request\RequestHandlers;

Loader::includeModule('tq.tools');

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo RequestHandlers::i()->process();
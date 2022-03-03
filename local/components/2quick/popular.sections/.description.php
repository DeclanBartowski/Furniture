<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = [
    'NAME' => 'Популярные категории',
    'DESCRIPTION' => "Компонент для вывода популярных категорий",
    'SORT' => 10,
    "COMPLEX" => "N",
    'PATH' => [
        'ID' => '2quick',
        'NAME' => 'Компоненты 2Quick',
        'SORT' => 10,
    ]
];

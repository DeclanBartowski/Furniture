<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * @var array $arTemplateParameters
 */

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Web\Json;
use Bitrix\Iblock;

if (!Loader::includeModule('iblock')) {
    return;
}

$arTemplateParameters['SYMBOL'] = array(
    'PARENT' => 'BASE',
    'NAME' => 'Фильтрация по символу',
    'TYPE' => 'STRING',
);
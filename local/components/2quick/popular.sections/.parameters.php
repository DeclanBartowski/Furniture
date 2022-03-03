<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

CModule::IncludeModule('iblock');

$arIBlock = array();
$iblockFilter = array('ACTIVE' => 'Y');

$rsIBlock = CIBlock::GetList(array('SORT' => 'ASC'), $iblockFilter);
while ($arr = $rsIBlock->Fetch())
{
    $id = (int)$arr['ID'];
    if (isset($offersIblock[$id]))
        continue;
    $arIBlock[$id] = '['.$id.'] '.$arr['NAME'];
}
unset($id, $arr, $rsIBlock, $iblockFilter);
unset($offersIblock);

$arComponentParameters = array(
    "PARAMETERS" => array(
        'IBLOCK_ID' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Инфоблоки',
            'TYPE' => 'LIST',
            'ADDITIONAL_VALUES' => 'Y',
            'MULTIPLE' => 'Y',
            'VALUES' => $arIBlock,
            'REFRESH' => 'Y',
        ),
        'FILTER_NAME' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Переменная фильтра',
            'TYPE' => 'STRING',
            'DEFAULT' => 'arrFilter'
        ),
    )
);

<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as &$arItem) {
    $arFileTmp = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE']['ID'],
        ['width' => 1500, 'height' => 500],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arItem['PREVIEW_PICTURE_SRC'] = $arFileTmp['src'];
}
unset($arItem);
?>
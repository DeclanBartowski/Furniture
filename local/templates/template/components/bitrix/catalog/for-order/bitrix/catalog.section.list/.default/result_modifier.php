<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['SECTIONS'] as &$arSection) {
    $arFileTmp = CFile::ResizeImageGet(
        $arSection['PICTURE']['ID'],
        ['width' => 1500, 'height' => 500],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arSection['PICTURE_RESIZED'] = $arFileTmp['src'];
}
unset($arSection);
?>
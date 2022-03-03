<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $picID) {
    $arFileTmp = CFile::ResizeImageGet(
        $picID,
        ['width' => 1000, 'height' => 1000],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arResult['GALLERY'][] =$arFileTmp['src'];
}

if (!empty($arResult['PROPERTIES']['PRODUCT']['VALUE'])) {
    $select = Array('ID', 'IBLOCK_ID', 'NAME','DETAIL_PAGE_URL','PROPERTY_*');
    $filter = Array(
        'IBLOCK_ID' => $arResult['PROPERTIES']['PRODUCT']['LINK_IBLOCK_ID'],
        'ID' => $arResult['PROPERTIES']['PRODUCT']['VALUE'],
        'ACTIVE_DATE' => 'Y',
        'ACTIVE' => 'Y'
    );
    $res = CIBlockElement::GetList(Array(), $filter, false, Array("nPageSize" => 1), $select);
    if ($ob = $res->GetNextElement()) {
        $fields = $ob->GetFields();
        $fields['PROPERTIES'] = $ob->GetProperties();
        $fields['PRICE'] = CCatalogProduct::GetOptimalPrice($fields['ID'], 1, $USER->GetUserGroupArray());
        $fields['PRODUCT'] = CCatalogProduct::GetByID($fields['ID']);
        $arResult['PRODUCT'] = $fields;
    }
}
if(!empty($arResult['PROPERTIES']['CAN_BE_INTERESED']['VALUE'])){
    $GLOBALS['arrInteresedFilter']['ID'] = $arResult['PROPERTIES']['CAN_BE_INTERESED']['VALUE'];
}
?>
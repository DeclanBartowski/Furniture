<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */

foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $intPicID) {
    $arFileTmp = CFile::ResizeImageGet(
        $intPicID,
        ['width' => 1343, 'height' => 452],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arResult['SLIDER'][] = $arFileTmp['src'];
}

if (!empty($arResult['DETAIL_PICTURE'])) {
    $arFileTmp = CFile::ResizeImageGet(
        $arResult['DETAIL_PICTURE']['ID'],
        ['width' => 250, 'height' => 250],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arResult['DETAIL_PICTURE_RESIZED'] = $arFileTmp['src'];
}

if (!empty($arResult['PROPERTIES']['OTHER_BRANDS']['VALUE'])) {
    $select = Array('ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE');
    $filter = Array(
        'IBLOCK_ID' => $arResult['PROPERTIES']['OTHER_BRANDS']['LINK_IBLOCK_ID'],
        'ID' => $arResult['PROPERTIES']['OTHER_BRANDS']['VALUE'],
        'ACTIVE_DATE' => 'Y',
        'ACTIVE' => 'Y'
    );
    $res = CIBlockElement::GetList(Array(), $filter, false, false, $select);
    while ($fields = $res->GetNext()) {
        $arFileTmp = CFile::ResizeImageGet(
            $fields['PREVIEW_PICTURE'],
            ['width' => 250, 'height' => 250],
            BX_RESIZE_IMAGE_PROPORTIONAL
        );
        $fields['PREVIEW_PICTURE_RESIZED'] = $arFileTmp['src'];
        $arResult['OTHER_BRANDS'][] = $fields;
    }
}

?>

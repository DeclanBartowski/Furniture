<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

if (!empty($arParams['ADDRESS'])) {
    $arResult['ADDRESS'] = $arParams['ADDRESS'];
}
if (!empty($arParams['PHONES'])) {
    foreach ($arParams['PHONES'] as $phone) {

        $arResult['PHONES'][] = [
            'FORMATED' => $phone,
            'PHONE' => preg_replace('~\D+~', '', $phone)
        ];
    }
    $arResult['PHONE'] = array_shift($arResult['PHONES']);
};
if (!empty($arParams['LINK_TO_TERMS_OF_USE'])) {
    $arResult['LINK_TO_TERMS_OF_USE'] = $arParams['LINK_TO_TERMS_OF_USE'];
}
if (!empty($arParams['LINK_TO_PRIVACY_POLICY'])) {
    $arResult['LINK_TO_PRIVACY_POLICY'] = $arParams['LINK_TO_PRIVACY_POLICY'];
}
if (!empty($arParams['INSTAGRAM'])) {
    $arResult['INSTAGRAM'] = $arParams['INSTAGRAM'];
}
if (!empty($arParams['FACEBOOK'])) {
    $arResult['FACEBOOK'] = $arParams['FACEBOOK'];
}

$this->IncludeComponentTemplate();

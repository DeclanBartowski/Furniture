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
};
if (!empty($arParams['EMAIL'])) {
    $arResult['EMAIL'] = $arParams['EMAIL'];
}

$this->IncludeComponentTemplate();

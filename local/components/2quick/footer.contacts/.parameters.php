<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
$arComponentParameters = array(
    "PARAMETERS" => array(
        "ADDRESS" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "Адрес",
            "TYPE" => "STRING",
        ),
        "PHONES" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => 'Телефоны',
            "MULTIPLE" => "Y",
            "ADDITIONAL_VALUES" => "Y",
            "TYPE" => "STRING",
        ),
        "EMAIL" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "E-Mail",
            "TYPE" => "STRING",
        )
    )
);

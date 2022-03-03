<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
$arComponentParameters = array(
    "PARAMETERS" => array(
        "LINK_TO_TERMS_OF_USE" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "Ссылка на пользоательское соглашение",
            "TYPE" => "STRING",
        ),
        "LINK_TO_PRIVACY_POLICY" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "Ссылка на политику конфиденциальности",
            "TYPE" => "STRING",
        ),
        "INSTAGRAM" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "Инстаграм",
            "TYPE" => "STRING",
        ),
        "FACEBOOK" => Array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => "Facebook",
            "TYPE" => "STRING",
        )
    )
);
?>

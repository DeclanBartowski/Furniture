<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
    <div class="personal-area_section">
        <div class="container">
            <?include_once ($_SERVER['DOCUMENT_ROOT'].'/include/header.php')?>
            <? $APPLICATION->IncludeComponent(
                "2quick:authorize",
                "",
                [],
                false
            ); ?>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
?>
<div class="unified-inner_section">
	<div class="container">
        <? include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php') ?>
        <? $APPLICATION->IncludeComponent(
            "2quick:order",
            "",
            Array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "86400",
                "CACHE_TYPE" => "A",
                "PATH_TO_PAYMENT" => "payment.php"
            )
        ); ?>
	</div>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

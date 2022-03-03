<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Смена пароля");
?>
	<div class="unified-inner_section">
		<div class="container">
            <?include_once ($_SERVER['DOCUMENT_ROOT'].'/include/header.php')?>
            <? $APPLICATION->IncludeComponent(
                "2quick:password.change",
                "",
                Array()
            ); ?>
		</div>
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
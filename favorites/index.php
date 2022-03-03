<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>
	<div class="unified-inner_section">
		<div class="container">
            <?include_once ($_SERVER['DOCUMENT_ROOT'].'/include/header.php')?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "basket-menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0 => "",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "N"
                )
            ); ?>
			<div class="favorites-block">
                <? $APPLICATION->IncludeComponent(
                    "2quick:favorites",
                    "",
                    Array()
                ); ?>
			</div>
		</div>
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
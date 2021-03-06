<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
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
			<div class="basket-block">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket",
                    "",
                    Array(
                        "ACTION_VARIABLE" => "basketAction",
                        "ADDITIONAL_PICT_PROP_3" => "-",
                        "ADDITIONAL_PICT_PROP_4" => "-",
                        "AUTO_CALCULATION" => "Y",
                        "BASKET_IMAGES_SCALING" => "adaptive",
                        "COLUMNS_LIST_EXT" => array(
                            "PREVIEW_PICTURE",
                            "DETAIL_PICTURE",
                            "PREVIEW_TEXT",
                            "DISCOUNT",
                            "WEIGHT",
                            "PROPS",
                            "DELETE",
                            "DELAY",
                            "TYPE",
                            "SUM",
                            "PROPERTY_ARTNUMBER",
                            "PROPERTY_MANUFACTURER",
                            "PROPERTY_COUNTRY",
                            "PROPERTY_MATERIAL",
                            "PROPERTY_MORE_PHOTO",
                            "PROPERTY_LENGTH",
                            "PROPERTY_WIDTH",
                            "PROPERTY_HEIGHT",
                            "PROPERTY_SEAT_DEPTH",
                            "PROPERTY_SEAT_HEIGHT",
                            "PROPERTY_COLOR",
                            "PROPERTY_LEG_MATERIAL",
                            "PROPERTY_USB",
                            "PROPERTY_REMOVABLE_COVER",
                            "PROPERTY_DECORATIVE_PILOWS",
                            "PROPERTY_FINISH_OPTIONS",
                            "PROPERTY_ADDITIONALS_PHOTOS",
                            "PROPERTY_ORDER_DATE",
                            "PROPERTY_INTERESED"
                        ),
                        "COLUMNS_LIST_MOBILE" => array(
                            "PREVIEW_PICTURE",
                            "DETAIL_PICTURE",
                            "PREVIEW_TEXT",
                            "DISCOUNT",
                            "WEIGHT",
                            "PROPS",
                            "DELETE",
                            "DELAY",
                            "TYPE",
                            "SUM",
                            "PROPERTY_ARTNUMBER",
                            "PROPERTY_MANUFACTURER",
                            "PROPERTY_COUNTRY",
                            "PROPERTY_MATERIAL",
                            "PROPERTY_MORE_PHOTO",
                            "PROPERTY_LENGTH",
                            "PROPERTY_WIDTH",
                            "PROPERTY_HEIGHT",
                            "PROPERTY_SEAT_DEPTH",
                            "PROPERTY_SEAT_HEIGHT",
                            "PROPERTY_COLOR",
                            "PROPERTY_LEG_MATERIAL",
                            "PROPERTY_USB",
                            "PROPERTY_REMOVABLE_COVER",
                            "PROPERTY_DECORATIVE_PILOWS",
                            "PROPERTY_FINISH_OPTIONS",
                            "PROPERTY_ADDITIONALS_PHOTOS",
                            "PROPERTY_ORDER_DATE",
                            "PROPERTY_INTERESED"
                        ),
                        "COMPATIBLE_MODE" => "Y",
                        "CORRECT_RATIO" => "Y",
                        "DEFERRED_REFRESH" => "N",
                        "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                        "DISPLAY_MODE" => "extended",
                        "EMPTY_BASKET_HINT_PATH" => "/catalog/",
                        "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
                        "GIFTS_CONVERT_CURRENCY" => "N",
                        "GIFTS_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_HIDE_NOT_AVAILABLE" => "N",
                        "GIFTS_MESS_BTN_BUY" => "Выбрать",
                        "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
                        "GIFTS_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_PLACE" => "BOTTOM",
                        "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
                        "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                        "GIFTS_SHOW_OLD_PRICE" => "N",
                        "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
                        "HIDE_COUPON" => "N",
                        "LABEL_PROP" => array(),
                        "PATH_TO_ORDER" => "/order/",
                        "PRICE_DISPLAY_MODE" => "Y",
                        "PRICE_VAT_SHOW_VALUE" => "N",
                        "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
                        "QUANTITY_FLOAT" => "Y",
                        "SET_TITLE" => "Y",
                        "SHOW_DISCOUNT_PERCENT" => "Y",
                        "SHOW_FILTER" => "Y",
                        "SHOW_RESTORE" => "Y",
                        "TEMPLATE_THEME" => "blue",
                        "TOTAL_BLOCK_DISPLAY" => array("top"),
                        "USE_DYNAMIC_SCROLL" => "Y",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "USE_GIFTS" => "N",
                        "USE_PREPAYMENT" => "N",
                        "USE_PRICE_ANIMATION" => "Y"
                    )
                ); ?>
			</div>
		</div>
	</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
    <div class="main-section">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider_on_main",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "13",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("URL", "URL_TEXT", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "NAME",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
    </div>
    <!-- end main-section -->
    <div class="category-section">
        <?
        $GLOBALS['popSectionsFilter']['!UF_POPULAR_CATEGORY'] = false;
        $APPLICATION->IncludeComponent(
            "2quick:popular.sections",
            "",
            Array(
                "FILTER_NAME" => "popSectionsFilter",
                "IBLOCK_ID" => array("3","4","")
            )
        );?>
    </div>
    <!-- end category-section -->
	<?$APPLICATION->IncludeComponent(
	    "bitrix:news.list",
	    "collections",
	    Array(
	    	"WRAP_CLASS" => 'brand-collections_section gray-section',
	        "ACTIVE_DATE_FORMAT" => "d.m.Y",
	        "ADD_SECTIONS_CHAIN" => "N",
	        "AJAX_MODE" => "N",
	        "AJAX_OPTION_ADDITIONAL" => "",
	        "AJAX_OPTION_HISTORY" => "N",
	        "AJAX_OPTION_JUMP" => "N",
	        "AJAX_OPTION_STYLE" => "Y",
	        "CACHE_FILTER" => "N",
	        "CACHE_GROUPS" => "Y",
	        "CACHE_TIME" => "36000000",
	        "CACHE_TYPE" => "A",
	        "CHECK_DATES" => "Y",
	        "DETAIL_URL" => "",
	        "DISPLAY_BOTTOM_PAGER" => "N",
	        "DISPLAY_DATE" => "Y",
	        "DISPLAY_NAME" => "Y",
	        "DISPLAY_PICTURE" => "Y",
	        "DISPLAY_PREVIEW_TEXT" => "Y",
	        "DISPLAY_TOP_PAGER" => "N",
	        "FIELD_CODE" => array("", ""),
	        "FILTER_NAME" => "",
	        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
	        "IBLOCK_ID" => "11",
	        "IBLOCK_TYPE" => "content",
	        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	        "INCLUDE_SUBSECTIONS" => "Y",
	        "MESSAGE_404" => "",
	        "NEWS_COUNT" => "100",
	        "PAGER_BASE_LINK_ENABLE" => "N",
	        "PAGER_DESC_NUMBERING" => "N",
	        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	        "PAGER_SHOW_ALL" => "N",
	        "PAGER_SHOW_ALWAYS" => "N",
	        "PAGER_TEMPLATE" => ".default",
	        "PAGER_TITLE" => "Новости",
	        "PARENT_SECTION" => "",
	        "PARENT_SECTION_CODE" => "",
	        "PREVIEW_TRUNCATE_LEN" => "",
	        "PROPERTY_CODE" => array("BRANDS", ""),
	        "SET_BROWSER_TITLE" => "N",
	        "SET_LAST_MODIFIED" => "N",
	        "SET_META_DESCRIPTION" => "N",
	        "SET_META_KEYWORDS" => "N",
	        "SET_STATUS_404" => "N",
	        "SET_TITLE" => "N",
	        "SHOW_404" => "N",
	        "SORT_BY1" => "SORT",
	        "SORT_BY2" => "ACTIVE_FROM",
	        "SORT_ORDER1" => "ASC",
	        "SORT_ORDER2" => "DESC",
	        "STRICT_SECTION_CHECK" => "N"
	    )
	);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"popular", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "show_counter",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "21",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "popular"
	),
	false
);?>
	<?$APPLICATION->IncludeComponent(
	    "bitrix:news.list",
	    "interior_ideas",
	    Array(
	        "ACTIVE_DATE_FORMAT" => "d.m.Y",
	        "ADD_SECTIONS_CHAIN" => "N",
	        "AJAX_MODE" => "N",
	        "AJAX_OPTION_ADDITIONAL" => "",
	        "AJAX_OPTION_HISTORY" => "N",
	        "AJAX_OPTION_JUMP" => "N",
	        "AJAX_OPTION_STYLE" => "Y",
	        "CACHE_FILTER" => "N",
	        "CACHE_GROUPS" => "Y",
	        "CACHE_TIME" => "36000000",
	        "CACHE_TYPE" => "A",
	        "CHECK_DATES" => "Y",
	        "DETAIL_URL" => "",
	        "DISPLAY_BOTTOM_PAGER" => "N",
	        "DISPLAY_DATE" => "Y",
	        "DISPLAY_NAME" => "Y",
	        "DISPLAY_PICTURE" => "Y",
	        "DISPLAY_PREVIEW_TEXT" => "Y",
	        "DISPLAY_TOP_PAGER" => "N",
	        "FIELD_CODE" => array("", ""),
	        "FILTER_NAME" => "",
	        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
	        "IBLOCK_ID" => "14",
	        "IBLOCK_TYPE" => "content",
	        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	        "INCLUDE_SUBSECTIONS" => "Y",
	        "MESSAGE_404" => "",
	        "NEWS_COUNT" => "20",
	        "PAGER_BASE_LINK_ENABLE" => "N",
	        "PAGER_DESC_NUMBERING" => "N",
	        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	        "PAGER_SHOW_ALL" => "N",
	        "PAGER_SHOW_ALWAYS" => "N",
	        "PAGER_TEMPLATE" => ".default",
	        "PAGER_TITLE" => "Новости",
	        "PARENT_SECTION" => "",
	        "PARENT_SECTION_CODE" => "",
	        "PREVIEW_TRUNCATE_LEN" => "",
	        "PROPERTY_CODE" => array("URL", ""),
	        "SET_BROWSER_TITLE" => "N",
	        "SET_LAST_MODIFIED" => "N",
	        "SET_META_DESCRIPTION" => "N",
	        "SET_META_KEYWORDS" => "N",
	        "SET_STATUS_404" => "N",
	        "SET_TITLE" => "N",
	        "SHOW_404" => "N",
	        "SORT_BY1" => "SORT",
	        "SORT_BY2" => "NAME",
	        "SORT_ORDER1" => "ASC",
	        "SORT_ORDER2" => "ASC",
	        "STRICT_SECTION_CHECK" => "N"
	    )
	);?>
	<?
	$GLOBALS['newFilter']['PROPERTY_NEW_VALUE'] = 'Y';
	$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"new", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "timestamp_x",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_POPULAR_CATEGORY",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "new"
	),
	false
);?>

	<?$APPLICATION->IncludeComponent(
	    "bitrix:news.list",
	    "brands_on_main",
	    Array(
	        "ACTIVE_DATE_FORMAT" => "d.m.Y",
	        "ADD_SECTIONS_CHAIN" => "N",
	        "AJAX_MODE" => "N",
	        "AJAX_OPTION_ADDITIONAL" => "",
	        "AJAX_OPTION_HISTORY" => "N",
	        "AJAX_OPTION_JUMP" => "N",
	        "AJAX_OPTION_STYLE" => "Y",
	        "CACHE_FILTER" => "N",
	        "CACHE_GROUPS" => "Y",
	        "CACHE_TIME" => "36000000",
	        "CACHE_TYPE" => "A",
	        "CHECK_DATES" => "Y",
	        "DETAIL_URL" => "",
	        "DISPLAY_BOTTOM_PAGER" => "N",
	        "DISPLAY_DATE" => "Y",
	        "DISPLAY_NAME" => "Y",
	        "DISPLAY_PICTURE" => "Y",
	        "DISPLAY_PREVIEW_TEXT" => "Y",
	        "DISPLAY_TOP_PAGER" => "N",
	        "FIELD_CODE" => array("", ""),
	        "FILTER_NAME" => "",
	        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
	        "IBLOCK_ID" => "1",
	        "IBLOCK_TYPE" => "content",
	        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	        "INCLUDE_SUBSECTIONS" => "Y",
	        "MESSAGE_404" => "",
	        "NEWS_COUNT" => "15",
	        "PAGER_BASE_LINK_ENABLE" => "N",
	        "PAGER_DESC_NUMBERING" => "N",
	        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	        "PAGER_SHOW_ALL" => "N",
	        "PAGER_SHOW_ALWAYS" => "N",
	        "PAGER_TEMPLATE" => ".default",
	        "PAGER_TITLE" => "Новости",
	        "PARENT_SECTION" => "",
	        "PARENT_SECTION_CODE" => "",
	        "PREVIEW_TRUNCATE_LEN" => "",
	        "PROPERTY_CODE" => array("", ""),
	        "SET_BROWSER_TITLE" => "N",
	        "SET_LAST_MODIFIED" => "N",
	        "SET_META_DESCRIPTION" => "N",
	        "SET_META_KEYWORDS" => "N",
	        "SET_STATUS_404" => "N",
	        "SET_TITLE" => "N",
	        "SHOW_404" => "N",
	        "SORT_BY1" => "SORT",
	        "SORT_BY2" => "NAME",
	        "SORT_ORDER1" => "ASC",
	        "SORT_ORDER2" => "ASC",
	        "STRICT_SECTION_CHECK" => "N"
	    )
	);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_on_main", 
	array(
		"ACTIVE_DATE_FORMAT" => "d F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news_on_main"
	),
	false
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
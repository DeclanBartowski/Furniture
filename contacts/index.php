<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="contact-section">
        <div class="container">
            <?include_once ($_SERVER['DOCUMENT_ROOT'].'/include/header.php')?>
            <?$APPLICATION->IncludeComponent(
                "2quick:fileInput",
                "banner",
                Array(
                    "TITLE" => "Мы открыты для вас!",
                    "FILE_PATH" => "/local/templates/template/img/static/banner/02.jpg",
                    "WRAP_CLASS" => "contact-top_banner",
                )
            );?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "contacts",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "-",
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
                    "ELEMENT_CODE" => "",
                    "ELEMENT_ID" => ELEMENT_CONTACTS,
                    "FIELD_CODE" => array("", ""),
                    "IBLOCK_ID" => "7",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Страница",
                    "PROPERTY_CODE" => array("EMAIL", "ADDRESS", "WORK_TIME", "PHONES", "COORDINATES"),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_SHARE" => "N"
                )
            );?>

            <?$APPLICATION->IncludeComponent(
                "2quick:main.feedback",
                "feedback",
                array(
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "COMPONENT_TEMPLATE" => "",
                    "EMAIL_TO" => "user@mail.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "52",
                    ),
                    "INFOBLOCKADD" => "Y",
                    "INFOBLOCKID" => "10",
                    "OK_TEXT" => "Ok.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "MULTI_FILES" => "N",
                    "FILE_SEND" => "N"
                ),
                false
            );?>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
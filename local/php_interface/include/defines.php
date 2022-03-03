<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Config\Option;
define('NO_IMAGE', Option::get("tq.tools", "tq_module_param_osnovnye_no_image"));

//Iblock
define('IBLOCK_POPULAR_BANNERS', 7);
define('IBLOCK_SHOPS', 2);
define('IBLOCK_DELIVERY_ADDRESSES', 22);

define('ELEMENT_CONTACTS', 8);
//Hightload
define('HL_NEWS_COLORS', 2);
define('HL_PRODUCT_COLORS', 6);

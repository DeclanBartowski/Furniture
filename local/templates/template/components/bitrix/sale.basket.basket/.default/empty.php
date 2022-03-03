<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
?>
<div class="no-active_purchases">
	<span class="no-active_purchases_icon"><img alt="alt" src="<?=SITE_TEMPLATE_PATH?>/img/icons/cart-icon.svg"></span>
	<p class="text-upper">Ваша корзина пуста!</p>
	<p>Перейдите в каталог, у нас много интересного </p>
	<a href="<?=$arParams['EMPTY_BASKET_HINT_PATH'];?>" class="main-btn">Перейти в каталог</a>
</div>
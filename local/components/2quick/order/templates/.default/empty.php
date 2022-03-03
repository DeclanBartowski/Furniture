<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>
<div class="unified-inner_content">
	<div class="order-placed_box">
		<div class="no-active_purchases_icon">
			<img alt="alt" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/cart-icon.svg">
		</div>
		<p class="text-upper">Ваша корзина пуста!</p>
		<p>Перейдите в каталог, у нас много интересного </p>
		<a href="/catalog/" class="main-btn">Перейти в каталог</a>
	</div>
</div>

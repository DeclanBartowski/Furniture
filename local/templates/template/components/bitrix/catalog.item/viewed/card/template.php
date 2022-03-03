<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */

?>
<div class="viewed-product_item-img">
	<a href="<?= $item['DETAIL_PAGE_URL'] ?>">
		<img data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['NAME']; ?>">
	</a>
</div>
<div class="viewed-product_item-desc">
    <? if ($item['CATALOG_QUANTITY'] > 0 && $item['CAN_BUY'] == 'Y') { ?>
		<span class="product-item_stock">В наличии</span>
    <? } else { ?>
		<span class="product-item_stock on-order">Под заказ</span>
    <? } ?>
	<span class="product-item_title">
			<a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME']; ?></a>
		</span>
    <? if (!empty($item['PROPERTIES']['ARTNUMBER']['VALUE'])) { ?>
		<span class="product-item_code">Арт. <?= $item['PROPERTIES']['ARTNUMBER']['VALUE']; ?></span>
    <? } ?>
    <? if ($item['CATALOG_QUANTITY'] > 0 && $item['CAN_BUY'] == 'Y') { ?>
		<span class="product-item_price"><?= $item['ITEM_PRICES'][0]['PRINT_PRICE']; ?></span>
    <? } else { ?>
		<span class="product-item_price">от <?= $item['ITEM_PRICES'][0]['PRINT_PRICE']; ?></span>
    <? } ?>
</div>

<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

/** @var array $arParams */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var array $arResult */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<? if (!empty($arResult['ITEMS'])) { ?>
	<div class="wrapper-fav_clear-list">
		<span data-class="tools" data-method="clear_favorites" class="fav_clear-list"><span class="ico-close"></span>Очистить список</span>
	</div>
	<table class="fav-table">
		<tr>
			<th colspan="2">Товар</th>
			<th>Артикул</th>
			<th>Скидка</th>
			<th>Цена</th>
			<th></th>
		</tr>
        <? foreach ($arResult['ITEMS'] as $arItem) { ?>
			<tr>
				<td>
					<span data-class="tools"
					      data-method="compfavdelete"
					      data-add="FAVORITES"
					      data-id="<?= $arItem['ID']; ?>" class="fav-item_delete ico-close">
					</span>
				</td>
				<td>
					<div class="fav-item">
						<div class="fav-item_img">
							<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
								<img data-src="<?= $arItem['PREVIEW_PICTURE_SRC']; ?>" alt="<?= $arItem['NAME']; ?>">
							</a>
							<span class="product-item_fav is-active">
								<span class="ico-fav"></span>
								<span class="ico-fav-2"></span>
							</span>
						</div>
						<div class="fav-item_desc">
							<span class="fav-item_stock"><span class="ico-check"></span>
								<? if ($arItem['CATALOG_QUANTITY'] > 0) { ?>
									В наличии
                                <? } else { ?>
									Под заказ
                                <? } ?>
							</span>
							<span class="fav-item_title">
								<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
									<?= $arItem['NAME']; ?>
								</a>
							</span>
						</div>
					</div>
				</td>
				<td><span class="mobile-title">Артикул</span><?= $arItem['PROPERTIES']['ARTNUMBER']['VALUE']; ?></td>
				<td><span class="mobile-title">Скидка</span>
					<?= CurrencyFormat($arItem['PRICE']['RESULT_PRICE']['DISCOUNT'], $arItem['PRICE']['PRICE']['CURRENCY']) ?>
				</td>
				<td>
					<span class="mobile-title">Цена</span><span class="fav-item_price">
						<?= CurrencyFormat($arItem['PRICE']['RESULT_PRICE']['DISCOUNT_PRICE'], $arItem['PRICE']['PRICE']['CURRENCY']) ?> / шт.
					</span>
				</td>
				<td>
					<a href="javascript:void(0)"
					   data-class="basket"
					   data-method="add2basket"
					   data-id="<?= $arItem['ID']; ?>"
					   class="add-order_btn">Добавить к заказу?
					</a>
				</td>
			</tr>
        <? } ?>
	</table>
<? } else { ?>
	<div class="fav-empty_box">
		            <span class="fav-empty_icon">
			            <img alt="alt" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/fav-icon.svg">
		            </span>
		<p class="text-upper">Ваш список избранного пуст!</p>
		<p>Перейдите в каталог, у нас много интересного </p>
		<a href="/catalog/" class="main-btn">Перейти в каталог</a>
	</div>
<? } ?>

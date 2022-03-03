<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Grid\Declension;

\Bitrix\Main\UI\Extension::load("ui.fonts.ruble");

$productDeclension = new Declension('товар', 'товара', 'товаров');;
/**
 * @var array $arParams
 * @var array $arResult
 * @var string $templateFolder
 * @var string $templateName
 * @var CMain $APPLICATION
 * @var CBitrixBasketComponent $component
 * @var CBitrixComponentTemplate $this
 * @var array $giftParameters
 */

$documentRoot = Main\Application::getDocumentRoot();
?>

<? if (empty($arResult['ERROR_MESSAGE'])) { ?>
	<div class="row">
		<div class="unified_left-column">
			<table class="cart-table">
				<tr>
					<th colspan="2">Товар</th>
					<th>Артикул</th>
					<th>Скидка</th>
					<th>Цена</th>
				</tr>
                <? foreach ($arResult['ITEMS']['AnDelCanBuy'] as $arItem) { ?>
					<tr>
						<td><span data-class="basket" data-method="delete" data-id="<?= $arItem['ID']; ?>"
						          class="cart-item_delete ico-close"></span></td>
						<td>
							<div class="cart-item">
								<div class="cart-item_img">
									<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
										<img data-src="<?= $arItem['PREVIEW_PICTURE_SRC']; ?>"
										     alt="<?= $arItem['NAME']; ?>">
									</a>
								</div>
								<div class="cart-item_desc">
											<span class="cart-item_stock">
												<span class="ico-check"></span>
												<? if ($arItem['TQ_PROPERTIES']['IS_OUT_OF_STOCKS']['VALUE'] != 'Y') { ?>
													В наличии
                                                <? } else { ?>
													Под заказ
                                                <? } ?>
											</span>
									<span class="cart-item_title">
												<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
													<?= $arItem['NAME']; ?>
												</a>
											</span>
								</div>
							</div>
						</td>
						<td><span class="mobile-title">Артикул</span><?= $arItem['PROPERTIES_ARTNUMBER_VALUE']; ?></td>
						<td><span class="mobile-title">Скидка</span><?= $arItem['DISCOUNT_PRICE_FORMATED']; ?></td>
						<td><span class="mobile-title">Цена</span><?= $arItem['PRICE_FORMATED']; ?>
							/ <?= $arItem['MEASURE_NAME']; ?>.
						</td>
					</tr>
                <? } ?>
			</table>
		</div>
		<div class="unified_right-column">
			<div class="wrapper-cart_clear-list">
				<span data-class="basket" data-method="clear" class="cart_clear-list"><span class="ico-close"></span>Очистить список</span>
			</div>
			<div class="cart-total_box js_scroll-box">
				<table class="cart-total_table">
					<tr class="first-row">
						<td>В корзине</td>
						<td><?= sprintf('%s %s', count($arResult['ITEMS']['AnDelCanBuy']),
                                $productDeclension->get(count($arResult['ITEMS']['AnDelCanBuy']))) ?></td>
					</tr>
					<tr class="middle-row">
						<td>Сумма НДС:</td>
						<td><?= CurrencyFormat($arResult['VAT_PRICE'], $arResult['CURRENCY']) ?></td>
					</tr>
					<tr class="saving-row">
						<td>Экономия</td>
						<td><?= $arResult['DISCOUNT_PRICE_ALL_FORMATED']; ?></td>
					</tr>
					<tr class="no-border_row">
						<td colspan="2"><span
									class="cart_total-sale"><?= $arResult['DISCOUNT_PRICE_FORMATED']; ?></span></td>
					</tr>
					<tr>
						<td>Итого:</td>
						<td><span class="cart-total_sum"><?= $arResult['allSum_FORMATED']; ?></span></td>
					</tr>
				</table>
				<a href="<?= $arParams['PATH_TO_ORDER']; ?>" class="checkout-btn main-btn">Оформить заказ</a>
			</div>
		</div>
	</div>
<? } elseif ($arResult['EMPTY_BASKET']) {
    include(Main\Application::getDocumentRoot() . $templateFolder . '/empty.php');
} else {
    ShowError($arResult['ERROR_MESSAGE']);
} ?>

<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

if ($arParams['SHOW_ORDER_PAGE'] !== 'Y') {
    LocalRedirect($arParams['SEF_FOLDER']);
}

if ($arParams["MAIN_CHAIN_NAME"] <> '') {
    $APPLICATION->AddChainItem(htmlspecialcharsbx($arParams["MAIN_CHAIN_NAME"]), $arResult['SEF_FOLDER']);
}

$APPLICATION->AddChainItem(Loc::getMessage("SPS_CHAIN_ORDERS"), $arResult['PATH_TO_ORDERS']); ?>
<div class="personal-area_section">
	<div class="container">
        <?include_once ($_SERVER['DOCUMENT_ROOT'].'/include/header.php')?>
		<ul class="orders-menu">
			<li<?if($_REQUEST['filter_history'] != 'Y' && $_REQUEST['show_canceled'] != 'Y'){?> class="active"<?}?>>
				<a href="<?=$arResult['PATH_TO_ORDERS'];?>">Текущие заказы</a>
			</li>
			<li<?if($_REQUEST['filter_history'] == 'Y' && $_REQUEST['show_canceled'] != 'Y'){?> class="active"<?}?>>
				<a href="<?=sprintf('%s?filter_history=Y',$arResult['PATH_TO_ORDERS']);?>">История заказов</a>
			</li>
			<li<?if($_REQUEST['filter_history'] == 'Y' && $_REQUEST['show_canceled'] == 'Y'){?> class="active"<?}?>>
				<a href="<?=sprintf('%s?filter_history=Y&show_canceled=Y',$arResult['PATH_TO_ORDERS']);?>">Отмененные заказы</a>
			</li>
		</ul>
		<!--<div class="order-good is-active">
							<table class="order-good_table">
								<thead>
									<tr>
										<th><span class="order-good_th-subtitle">Название заказа</span>№2156235</th>
										<th><span class="order-good_th-subtitle">Дата</span>5.07.2021</th>
										<th><span class="order-good_th-subtitle">Статус</span><span class="order-good_status submitted">Отправлен</span></th>
										<th colspan="2"><span class="order-good_th-subtitle">Общая скидка</span>2 540 руб.</th>
										<th><span class="order-good_th-subtitle">Сумма</span>6587 руб.</th>
										<th>
											<div class="order-good_th-flex">
												<span class="order-good_th-collapse-btn"></span>
												<span class="order-good_mobile-btn"><span class="text">Свернуть</span></span>
											</div>
										</th>
									</tr>
								</thead>
								<tbody class="order-good_content">
									<tr class="order-good_title-row">
										<td colspan="2">Товар</td>
										<td>Артикул</td>
										<td>Количество</td>
										<td>Скидка</td>
										<td colspan="2">Цена</td>
									</tr>
									<tr class="order-good_mobile-row">
										<td colspan="7">
											<span class="order-good_mobile-title">Состав заказа</span>
											<a href="" class="order-good_clear-btn"><span class="ico-close"></span>Очистить все</a>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="order-good_product">
												<a href="">
													<div class="order-good_product-img">
														<img src="img/static/product/03.jpg" alt="alt">
													</div>
													<div class="order-good_product-desc">
														<span class="mobile-title">Товар</span>
														<span class="order-good_product-stock"><span class="ico-check"></span>В наличии</span>
														<span class="order-good_product-title">Гидромассажный бассейн Jacuzzi J-210</span>
													</div>
												</a>
											</div>
										</td>
										<td><span class="mobile-title">Артикул</span>CS027</td>
										<td>
											<span class="mobile-title">Количество</span>1 шт.
										</td>
										<td><span class="mobile-title">Скидка</span>548 <span class="rouble">i</span></td>
										<td colspan="2"><span class="mobile-title">Цена</span>1 675 руб. / шт.</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="order-good_product">
												<a href="">
													<div class="order-good_product-img">
														<img src="img/static/product/04.jpg" alt="alt">
													</div>
													<div class="order-good_product-desc">
														<span class="mobile-title">Товар</span>
														<span class="order-good_product-stock"><span class="ico-check"></span>В наличии</span>
														<span class="order-good_product-title">Sevensedie спальня Ellipse</span>
													</div>
												</a>
											</div>
										</td>
										<td><span class="mobile-title">Артикул</span>CS027</td>
										<td>
											<span class="mobile-title">Количество</span>1 шт.
										</td>
										<td><span class="mobile-title">Скидка</span>548 <span class="rouble">i</span></td>
										<td colspan="2"><span class="mobile-title">Цена</span>1 675 руб. / шт.</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="order-good_product">
												<a href="">
													<div class="order-good_product-img">
														<img src="img/static/product/05.jpg" alt="alt">
													</div>
													<div class="order-good_product-desc">
														<span class="mobile-title">Товар</span>
														<span class="order-good_product-stock"><span class="ico-check"></span>В наличии</span>
														<span class="order-good_product-title">Спа-Бассейн Jacuzzi J-375</span>
													</div>
												</a>
											</div>
										</td>
										<td><span class="mobile-title">Артикул</span>CS027</td>
										<td>
											<span class="mobile-title">Количество</span>1 шт.
										</td>
										<td><span class="mobile-title">Скидка</span>548 <span class="rouble">i</span></td>
										<td colspan="2"><span class="mobile-title">Цена</span>1 675 руб. / шт.</td>
									</tr>
								</tbody>
							</table>
						</div>-->
        <? $APPLICATION->IncludeComponent(
            "bitrix:sale.personal.order.list",
            "",
            array(
                "PATH_TO_DETAIL" => $arResult["PATH_TO_ORDER_DETAIL"],
                "PATH_TO_CANCEL" => $arResult["PATH_TO_ORDER_CANCEL"],
                "PATH_TO_CATALOG" => $arParams["PATH_TO_CATALOG"],
                "PATH_TO_COPY" => $arResult["PATH_TO_ORDER_COPY"],
                "PATH_TO_BASKET" => $arParams["PATH_TO_BASKET"],
                "PATH_TO_PAYMENT" => $arParams["PATH_TO_PAYMENT"],
                "SAVE_IN_SESSION" => $arParams["SAVE_IN_SESSION"],
                "ORDERS_PER_PAGE" => $arParams["ORDERS_PER_PAGE"],
                "SET_TITLE" => $arParams["SET_TITLE"],
                "ID" => $arResult["VARIABLES"]["ID"],
                "NAV_TEMPLATE" => $arParams["NAV_TEMPLATE"],
                "ACTIVE_DATE_FORMAT" => $arParams["ACTIVE_DATE_FORMAT"],
                "HISTORIC_STATUSES" => $arParams["ORDER_HISTORIC_STATUSES"],
                "ALLOW_INNER" => $arParams["ALLOW_INNER"],
                "ONLY_INNER_FULL" => $arParams["ONLY_INNER_FULL"],
                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                "CACHE_TIME" => $arParams["CACHE_TIME"],
                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                "DISALLOW_CANCEL" => $arParams["ORDER_DISALLOW_CANCEL"],
                "DEFAULT_SORT" => $arParams["ORDER_DEFAULT_SORT"],
                "RESTRICT_CHANGE_PAYSYSTEM" => $arParams["ORDER_RESTRICT_CHANGE_PAYSYSTEM"],
                "REFRESH_PRICES" => $arParams["ORDER_REFRESH_PRICES"],
            ),
            $component
        ); ?>
	</div>
</div>


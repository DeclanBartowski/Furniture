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

$this->SetViewTarget('main-class'); ?> cart<? $this->EndViewTarget(); ?>
<noscript>
	<div style="color:red"><?= GetMessage('SOA_NO_JS'); ?></a>.</div>
</noscript>
<? global $USER;
if ($USER->IsAdmin()) {
    unset($arResult['CITIES']) ?>
	<pre><? //= var_dump($arResult); ?></pre>
<? } ?>


<form method="POST" id="ORDER" class="checkout-form">
	<div class="tq_error_order"></div>
	<div class="row">
		<div class="unified_left-column">
            <? if (!empty($arResult['PROPERTIES'][2])) { ?>
				<div class="checkout-title">регион доставки</div>
				<div class="row checkout_top-row">
                    <? foreach ($arResult['PROPERTIES'][2] as $prop) { ?>
                        <? if ($prop['IS_LOCATION'] == 'Y') { ?>
							<div class="col-md-6">
								<div class="form-group form-group_location">
                                    <? $APPLICATION->IncludeComponent(
                                        'bitrix:sale.location.selector.search',
                                        'location',
                                        array(),
                                        false
                                    ); ?>
                                    <? /*<input type="text" class="form-control">
									<label class="form-label">Местоположение</label>
									<button class="location-button ico-search"></button>
									<span class="input_delete-text ico-close"></span>*/ ?>
								</div>
							</div>
                        <? } else { ?>
							<div class="col-md-6">
								<div class="form-group">
									<input name="<?= $prop['CODE']; ?>"
									       value="<?= (is_array($prop['VALUE']) ? $prop['VALUE'][0] : $prop['VALUE']); ?>"
									       type="text"
									       class="form-control<? if ($prop['REQUIRED'] == 'Y') { ?> requiredField<? } ?> <? if ($prop['IS_PROFILE_NAME'] == 'Y') { ?>callback-name
						 <? } elseif ($prop['IS_EMAIL'] == 'Y') { ?>callback-email
						 <? } elseif ($prop['IS_PHONE'] == 'Y') { ?>callback-phone
						 <? } else { ?>callback-text<? } ?>">
									<label class="form-label"><?= $prop['NAME']; ?><? if ($prop['REQUIRED'] == 'Y') { ?>*<? } ?></label>
								</div>
							</div>
                        <? } ?>
                    <? } ?>

				</div>
            <? } ?>
            <? if (!empty($arResult['DELIVERIES'])) { ?>
				<div class="checkout-title">Способ доставки</div>
				<div class="row delivery-box tq_delivery_list">
                    <? foreach ($arResult['DELIVERIES'] as $arDelivery) { ?>
						<div class="col-md-4">
							<div class="delivery-item<? if ($arDelivery['CHECKED'] == 'Y') { ?> is-active<? } ?>">
								<div class="delivery-item_header">
									<span class="delivery-item_icon">
										<img src="<?= $arDelivery['LOGO_PATH']; ?>"
										     alt="alt">
									</span>
									<div class="delivery-item_price">
                                        <?= ($arDelivery['PRICE'] == 0) ? 'Бесплатно' : $arDelivery['PRICE_FORMATED']; ?>
									</div>
								</div>
								<label class="unified-radio">
									<input value="<?= $arDelivery['ID']; ?>"
                                           <? if ($arDelivery['CHECKED'] == 'Y'){ ?>checked<? } ?>
									       type="radio"
									       class="input-radio"
									       name="delivery">
									<span class="radio-text"><?= $arDelivery['NAME']; ?></span>
								</label>
								<p><?= $arDelivery['DESCRIPTION']; ?></p>
							</div>
						</div>
                    <? } ?>
				</div>
            <? } ?>
            <? if (!empty($arResult['PAYMENT'])) { ?>
				<div class="checkout-title">Способ оплаты</div>
				<div class="payment-row row">
                    <? foreach ($arResult['PAYMENT'] as $key => $arPayment) { ?>
						<div class="col-md-4">
							<div class="payment-item<? if ($key == 0) { ?> is-active<? } ?>">
								<label class="unified-radio">
									<input value="<?= $arPayment['ID']; ?>"
									       type="radio"
									       class="input-radio"
                                           <? if ($key == 0){ ?>checked<? } ?>
									       name="payment">
									<span class="radio-text"></span>
								</label>
								<span class="payment-item_icon"><img
											data-src="<?= CFile::GetPath($arPayment['LOGOTIP']); ?>" alt="alt"></span>
                                <?= $arPayment['NAME']; ?>
							</div>
						</div>
                    <? } ?>
				</div>
            <? } ?>


            <? if (!empty($arResult['PROPERTIES'][3])) { ?>
				<div class="checkout-title">Покупатель</div>
				<div class="row checkout_form-fields">
                    <? foreach ($arResult['PROPERTIES'][3] as $prop) { ?>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text"
								       value="<?= (is_array($prop['VALUE']) ? $prop['VALUE'][0] : $prop['VALUE']); ?>"
								       name="<?= $prop['CODE']; ?>"
								       class="form-control<? if ($prop['REQUIRED'] == 'Y') { ?> requiredField<? } ?>
						 <? if ($prop['IS_PROFILE_NAME'] == 'Y') { ?>callback-name
						 <? } elseif ($prop['IS_EMAIL'] == 'Y') { ?>callback-email
						 <? } elseif ($prop['IS_PHONE'] == 'Y') { ?>callback-phone
						 <? } else { ?>callback-text<? } ?>">
								<label class="form-label"><?= $prop['NAME']; ?><? if ($prop['REQUIRED'] == 'Y') { ?>*<? } ?></label>
							</div>
						</div>
                    <? } ?>
					<div class="col-md-12">
						<div class="form-group form-group_mod">
							<textarea name="comment" class="form-control"></textarea>
							<label class="form-label">Комментарий к заказу</label>
						</div>
					</div>
				</div>
            <? } ?>
            <? include($_SERVER['DOCUMENT_ROOT'] . $templateFolder . '/basket-items.php') ?>
		</div>
		<div class="unified_right-column">
			<div class="wrapper-cart_clear-list">
				<span data-class="basket" data-method="clearOrder" class="cart_clear-list"><span
							class="ico-close"></span>Очистить список</span>
			</div>
			<div class="checkout-total_sidebar js_scroll-box">
				<div class="checkout-total_box">
					<table class="cart-total_table checkout-total_table">
						<tr class="first-row">
							<td>В корзине</td>
							<td><?= $arResult['INFO_ORDER']['BASKET_COUNT']; ?></td>
						</tr>
                        <? /*
						<tr class="middle-row">
							<td>Сумма НДС:</td>
							<td>0 руб.</td>
						</tr>
						*/ ?>
						<tr class="saving-row">
							<td>Доставка</td>
							<td class="cart__price-delivery">
                                <?= ($arResult['INFO_ORDER']['DELIVERY_PRICE'] > 0) ?
                                    $arResult['INFO_ORDER']['FORMATED_DELIVERY_PRICE'] :
                                    'Бесплатно'; ?>
							</td>
						</tr>
						<tr class="saving-row">
							<td>Экономия</td>
							<td><?= $arResult['INFO_ORDER']['FORMATED_DISCOUNT_PRICE']; ?></td>
						</tr>
						<tr class="no-border_row">
							<td colspan="2">
								<span class="cart_total-sale"><?= $arResult['INFO_ORDER']['PRICE_FORMATED']; ?></span>
							</td>
						</tr>
						<tr class="last-child">
							<td>Итого:</td>
							<td>
								<span class="checkout-total_sum cart__price-sum"><?= $arResult['INFO_ORDER']['FORMATED_BASKET_SUM']; ?></span>
							</td>
						</tr>
					</table>
				</div>
				<input type="submit" class="checkout-form_submit main-mod_btn js_form-submit" value="Оформить заказ">
				<div class="checkout-form_policy">
					Нажимая на кнопку "Оформить заказ", вы соглашаетесь на <a href="/privacy-policy/">Обработку своих
						персональных
						данных</a> и соглашаетесь с <a href="/terms-of-use/">Условиями конфиденциальности</a>
				</div>
			</div>
		</div>
	</div>
</form>

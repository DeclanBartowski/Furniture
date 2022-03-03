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
<? if (!empty($arResult['PHONE'])) { ?>
	<div class="head_phone-number">
		<div class="phone-row">
			<a href="tel:<?= $arResult['PHONE']['PHONE']; ?>">
				<span class="ico-phone"></span><?= $arResult['PHONE']['FORMATED']; ?>
			</a>
            <? if (!empty($arResult['PHONES'])) { ?>
				<span class="ico-arrow-2 js_phone-icon"></span>
            <? } ?>
		</div>
        <? if (!empty($arResult['PHONES'])) { ?>
			<div class="dropdown-phone">
                <? foreach ($arResult['PHONES'] as $phone) { ?>
					<a href="tel:<?= $phone['PHONE']; ?>">
                        <?= $phone['FORMATED']; ?>
					</a>
                <? } ?>
			</div>
        <? } ?>
	</div>
<? } ?>
<? if (!empty($arResult['ADDRESS'])) { ?>
	<div class="head-adress">
		<span class="ico-adress"></span>
        <?= $arResult['ADDRESS']; ?>
	</div>
<? } ?>
<a href="#callback" data-toggle="modal" class="main-btn callback-btn">Заказать звонок</a>
<? if (!empty($arResult['INSTAGRAM']) || !empty($arResult['FACEBOOK'])) { ?>
	<ul class="head_social-network">
        <? if (!empty($arResult['INSTAGRAM'])) { ?>
			<li>
				<a href="<?= $arResult['INSTAGRAM']; ?>">
					<span class="ico-instagram"></span>
				</a>
			</li>
        <? } ?>
        <? if (!empty($arResult['FACEBOOK'])) { ?>
			<li>
				<a href="<?= $arResult['FACEBOOK']; ?>">
					<span class="ico-fb"></span>
				</a>
			</li>
        <? } ?>
	</ul>
<? } ?>
<div class="tablet-small_visible mobile-header_box">
	<ul class="head-mobile_list">
		<li>&#169; Архитектура мебели <?= date('Y'); ?></li>
        <? if (!empty($arResult['LINK_TO_TERMS_OF_USE'])) { ?>
			<li><a href="<?= $arResult['LINK_TO_TERMS_OF_USE']; ?>">Пользовательское соглашение</a></li>
        <? } ?>
        <? if (!empty($arResult['LINK_TO_TERMS_OF_USE'])) { ?>
			<li><a href="<?= $arResult['LINK_TO_PRIVACY_POLICY']; ?>">Политика конфеденциальности</a></li>
        <? } ?>
	</ul>
	<a href="javascript:void(0)" class="mobile-studio">
		<img data-src="<?= SITE_TEMPLATE_PATH; ?>/img/static/studio.svg" alt="alt">
	</a>
</div>

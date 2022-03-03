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
<div class="unified-inner_content">
	<div class="password-changed_box">
		<div class="password-changed_icon">
			<img data-src="<?= SITE_TEMPLATE_PATH ?>/img/icons/ico-check.svg" alt="alt">
		</div>
		<p class="text-upper">Вы успешно сменили пароль</p>
		<a href="/personal/" class="main-btn">Перейти в личный кабинет</a>
	</div>
</div>
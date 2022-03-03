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
<ul class="footer-contact">
    <? if (!empty($arResult['ADDRESS'])) { ?>
		<li>
			<span class="ico-adress item-icon"></span>
            <?= $arResult['ADDRESS']; ?>
		</li>
    <? } ?>
    <? if (!empty($arResult['PHONES'])) { ?>
		<li>
			<span class="ico-phone item-icon"></span>
            <? foreach ($arResult['PHONES'] as $key => $phone) { ?>
	            <a href="tel:<?= $phone['PHONE']; ?>">
                    <?= $phone['FORMATED']; ?>
	            </a>
                <? if ($key != array_key_last($arResult['PHONES'])) { ?> <br><? } ?>
            <? } ?>
		</li>
    <? } ?>
    <? if (!empty($arResult['EMAIL'])) { ?>
	<li class="last-child">
		<a href="mailto:<?=$arResult['EMAIL'];?>" class="footer-email">
			<span class="ico-email"></span><?=$arResult['EMAIL'];?>
		</a>
	</li>
    <? } ?>
</ul>

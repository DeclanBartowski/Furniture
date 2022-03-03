<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
$this->setFrameMode(true);

?>
<div class="brand-slider">
    <? foreach ($arResult['SLIDER'] as $item) { ?>
		<div class="brand-slide">
			<img src="<?= $item; ?>" alt="<?= $arResult['NAME']; ?>">
			<span class="item-title"><?= $arResult['NAME']; ?></span>
		</div>
    <? } ?>
</div>
<div class="brand-detailed_desc">
    <? if (!empty($arResult['DETAIL_PICTURE_RESIZED'])) { ?>
		<div class="brand-detailed_logo">
			<img data-src="<?= $arResult['DETAIL_PICTURE_RESIZED']; ?>" alt="<?= $arResult['NAME']; ?>">
		</div>
    <? } ?>
    <?= $arResult['DETAIL_TEXT']; ?>
    <? if (!empty($arParams['BACK_LINK'])) { ?>
		<div class="wrapper_back-page_btn">
			<a href="<?= $arParams['BACK_LINK']; ?>" class="main-btn back-page_btn"><span class="ico-arrow-3"></span>Назад
				к брендам</a>
		</div>
    <? } ?>
</div>
<?if(!empty($arResult['OTHER_BRANDS'])){?>
<ul class="brand-list_mod">
	<?foreach ($arResult['OTHER_BRANDS'] as $arBrand){?>
	<li class="brand-item">
		<a href="<?=$arBrand['DETAIL_PAGE_URL'];?>"><img data-src="<?=$arBrand['PREVIEW_PICTURE_RESIZED'];?>" alt="<?=$arBrand['NAME'];?>"></a>
	</li>
	<?}?>
</ul>
<?}?>

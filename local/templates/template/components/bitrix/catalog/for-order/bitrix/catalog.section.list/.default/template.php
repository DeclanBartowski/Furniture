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
$this->setFrameMode(true); ?>
<div class="category-mod_section-body">
	<div class="container">
        <? foreach ($arResult['SECTIONS'] as $arSection) {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete,
                $arSectionDeleteParams); ?>
			<div class="category-mod_item" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
				<a href="<?= $arSection['SECTION_PAGE_URL']; ?>" class="category-mod_item-img">
					<img data-src="<?= $arSection['PICTURE_RESIZED']; ?>" alt="<?= $arSection['NAME']; ?>">
					<span class="item-title"><?= $arSection['NAME']; ?></span>
				</a>
				<a href="<?= $arSection['SECTION_PAGE_URL']; ?>" class="category-mod_item-link">Смотреть <span
							class="ico-arrow"></span></a>
			</div>
        <? } ?>
	</div>
</div>
<!-- end category-mod_slider -->

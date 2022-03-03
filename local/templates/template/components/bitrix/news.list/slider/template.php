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
<? if (!empty($arResult["ITEMS"])) { ?>
	<div class="category-mod_slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
			<div class="category-mod_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<a href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>" class="category-mod_item-img">
					<img data-src="<?= $arItem['PREVIEW_PICTURE_SRC']; ?>" alt="<?= $arItem['NAME']; ?>">
					<span class="item-title"><?= $arItem['NAME']; ?></span>
				</a>
			</div>
        <? endforeach; ?>
	</div>
	<!-- end category-mod_slider -->
<? } ?>

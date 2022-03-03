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
if (!empty($arResult['ITEMS'])) {
    ?>
	<div class="category-other_section">
		<div class="container">
			<div class="section-title">Вам также могут быть интересны</div>
			<div class="row subcategory-row">
            <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                <?
                if (!$arItem['PREVIEW_PICTURE']['SRC']) {
                    continue;
                }
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                ?>
	            <div class="col-lg-4 col-md-6 col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		            <div class="category-item">
			            <a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
				            <div class="category-item_img">
					            <img data-src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"
					                 alt="<?=$arItem['NAME'];?>">
				            </div>
				            <span class="category-item_title">
					            <?=$arItem['NAME'];?>
					            <span class="arrow-icon"></span>
				            </span>
			            </a>
		            </div>
	            </div>
            <? endforeach; ?>
			</div>
		</div>
	</div>
<? } ?>

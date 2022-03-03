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
if (!empty($arResult['ITEMS'])) { ?>
	<div class="instagram-section">
		<div class="container">
			<div class="section-title"><?=$arResult['NAME'];?></div>
			<span class="top-subtitle"><?=$arResult['DESCRIPTION'];?></span>
			<div class="row instagram-row">
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
	                <div class="col-md-3 col-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		                <div class="instagram-item">
			                <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>">
				                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="alt">
			                </a>
		                </div>
	                </div>
                <? endforeach; ?>
			</div>
		</div>
	</div>
	<!-- end instagram-section -->
<? } ?>
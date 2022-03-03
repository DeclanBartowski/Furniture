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
	<div class="container">
        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if ($key % 2) {
                ?>
				<div class="row align-items-center about-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="col-xl-5 col-lg-6 col-md-6 order-md-2 about-item_img">
						<img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="alt">
					</div>
					<div class="col-xl-7 col-lg-6 col-md-6">
						<div class="about-item_desc">
							<p class="text-upper"><?= $arItem['NAME']; ?></p>
                            <?= $arItem['~PREVIEW_TEXT'] ?>
						</div>
					</div>
				</div>
                <?
            } else {
                ?>
				<div class="row about-item <?
                if ($key == 0) { ?>about-item_first<?
                } ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="col-xl-4 col-lg-5 col-md-6 about-item_img">
						<img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="alt">
					</div>
					<div class="col-xl-8 col-lg-7 col-md-6">
						<div class="about-item_desc">
							<p class="text-upper"><?= $arItem['NAME']; ?></p>
                            <?= $arItem['~PREVIEW_TEXT'] ?>
						</div>
					</div>
				</div>
                <?
            }
            ?>
        <? endforeach; ?>
	</div>
<? } ?>
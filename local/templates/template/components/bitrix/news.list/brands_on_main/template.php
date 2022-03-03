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
	<div class="brand-section">
		<div class="container">
			<div class="brand-section_header">
				<div class="section-title">У нас вся италия!</div>
				<a href="/brands/" class="see-all_btn">Смотреть все<span class="ico-arrow"></span></a>
			</div>
			<ul class="brand-list">
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
					<li class="brand-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
							<img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="alt">
						</a>
					</li>
                <? endforeach; ?>
			</ul>
		</div>
	</div>
<? } ?>
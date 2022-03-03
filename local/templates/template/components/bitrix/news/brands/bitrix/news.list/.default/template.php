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
    <? if (!empty($arResult["ABCALF"])) { ?>
		<ul class="brands-menu">
            <? foreach ($arResult["ABCALF"] as $item) { ?>
				<li<? if ($arResult['CURRENT_SUMBOL'] == $item['symbol']) { ?> class="active"<? } ?>>
					<a href="<?= $item['link']; ?>">
                        <?= $item['symbol']; ?>
					</a>
				</li>
            <? } ?>
		</ul>
    <? } ?>
	<!-- end brands-menu -->
	<ul class="brand-list_mod dds-list-items">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

			<li class="brand-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><img data-src="<?= $arItem['PREVIEW_PICTURE_RESIZED']; ?>"
				                                                  alt="alt"></a>
			</li>

        <? endforeach; ?>
	</ul>

	<div class="pagination-footer dds-list-pag">
        <?= $arResult["NAV_STRING"] ?>
        <? if ($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->nEndPage): ?>
			<a href="javascript:void(0)" class="main-btn show-more_btn"
			   data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
			   data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
			   data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>">
				<span class="ico-load"></span>
				Показать еще
			</a>
        <? endif ?>
	</div>
<? } ?>


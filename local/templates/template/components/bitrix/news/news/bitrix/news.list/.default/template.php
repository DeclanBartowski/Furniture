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
	<div class="row news-row news-content dds-list-items">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            if (!$arItem['PREVIEW_PICTURE']['ID']) {
                continue;
            }
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
                ['width' => 657, 'height' => 509],
                BX_RESIZE_IMAGE_PROPORTIONAL
            )['src'];
            ?>
			<div class="col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="news-item">
					<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
						<div class="news-item_img">
							<img src="<?= $picture; ?>" alt="alt">
						</div>
						<div class="news-item_desc">
							<span class="news-item_title"><?= $arItem['NAME']; ?></span>
                            <? if ($arItem['PREVIEW_TEXT']) { ?>
								<p>
                                    <?= $arItem['PREVIEW_TEXT']; ?>
								</p>
                            <? } ?>
							<span class="news-item_date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></span>
						</div>
					</a>
				</div>
			</div>
        <? endforeach; ?>
	</div>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
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
    <? endif; ?>
<? } ?>
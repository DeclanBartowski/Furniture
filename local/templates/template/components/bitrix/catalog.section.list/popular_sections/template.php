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

if (!empty($arResult['SECTIONS'])) {
    $strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
    $strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
    $arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

    $this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
    $this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete,
        $arSectionDeleteParams);
    ?>
	<div class="category-section_content">
		<div class="category-section_header">
			<h2 class="white-title">Популярные категории</h2>
			<a href="/catalog/" class="see-all_btn mobile-hidden">Смотреть весь каталог <span class="ico-arrow"></span></a>
		</div>
		<div class="category-slider">
            <?
            foreach ($arResult['SECTIONS'] as $arSection) {
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete,
                    $arSectionDeleteParams);
                ?>
				<div class="category-item" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
					<a href="<?= $arSection['SECTION_PAGE_URL'] ?>">
                        <? if ($arSection['PICTURE']['ID']) {
                            $picture = CFile::ResizeImageGet($arSection['PICTURE']['ID'],
                                ['width' => 547, 'height' => 386],
                                BX_RESIZE_IMAGE_PROPORTIONAL
                            )['src'];
                            ?>
							<div class="category-item_img">
								<img data-src="<?= $picture; ?>" alt="alt">
							</div>
                        <? } ?>
						<span class="category-item_title"><?= $arSection['NAME'] ?> <span
									class="arrow-icon"></span></span>
					</a>
				</div>
            <? } ?>
		</div>
		<?if (count($arResult['SECTIONS']) > 3) {?>
		<div class="category-counter"></div>
		<?}?>
		<div class="mobile-visible">
			<a href="/catalog/" class="see-all_mobile-btn main-btn">Смотреть весь каталог</a>
		</div>
	</div>
<? } ?>
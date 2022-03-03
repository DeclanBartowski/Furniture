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
	<div class="interior-section">
		<div class="container">
			<div class="section-title">идеи для интерьера</div>
			<div class="interior-slider">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
					<div class="interior-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<a href="<?= $arItem['PROPERTIES']['URL']['VALUE']; ?>" class="interior-item_img">
                            <? if ($arItem['PREVIEW_PICTURE']['ID']) {
                                $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
                                    ['width' => 1343, 'height' => 673],
                                    BX_RESIZE_IMAGE_PROPORTIONAL
                                )['src'];
                                ?>
								<img src="<?= $picture; ?>" alt="alt">
                            <? } ?>
							<span class="interior-item_title"><?= $arItem['NAME']; ?></span>
						</a>
						<a href="<?= $arItem['PROPERTIES']['URL']['VALUE']; ?>" class="interior-item_btn">Подробнее
							<span class="ico-arrow"></span></a>
					</div>
                <? endforeach; ?>
			</div>
		</div>
	</div>
<? } ?>

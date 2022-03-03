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
	<div class="main-slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
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
			<div class="wrapper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="main-slide" style="background-image:url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>')">
					<div class="container">
						<h1 class="main-slide_title"><?= htmlspecialchars_decode($arItem['NAME']); ?></h1>
                        <? if ($arItem['PROPERTIES']['URL']['VALUE']) { ?>
							<a href="<?= $arItem['PROPERTIES']['URL']['VALUE']; ?>"
							   <?if($arItem['PROPERTIES']['MODAL']['VALUE'] == 'Y'){?>data-toggle="modal"<?}?>
							   class="main-slide_btn"><?= $arItem['PROPERTIES']['URL_TITLE']['VALUE'] ?: 'Заказать сейчас' ?></a>
                        <? } ?>
					</div>
				</div>
			</div>
        <? endforeach; ?>
	</div>
	<span class="menu-text">меню</span>
	<ul class="main-slider_dots">
        <? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
			<li data-id="<?= $key; ?>" <? if ($key == 0) { ?>class="active"<? } ?>></li>
        <? } ?>
	</ul>
<? } ?>

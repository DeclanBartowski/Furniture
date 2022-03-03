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
	<div class="<?= $arParams['WRAP_CLASS'] ?: 'brand-collections_section';?>">
		<div class="tab-container">
			<div class="container">
				<h2>Коллекции брендов</h2>
				<div class="brand-collections_header">
					<ul class="brand-collections_tab-names">
                        <? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
							<li class="tab<? if ($key == 0) { ?> active<? } ?>"><?= $arItem['NAME']; ?></li>
                        <? } ?>
						<li class="anim-line"></li>
					</ul>
					<a href="/brands/" class="see-all_btn mobile-hidden">Смотреть еще
						+<?= $arResult['BRANDS_COUNT']; ?><span class="ico-arrow"></span></a>
				</div>
			</div>

            <? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
				<div class="tab-item<? if ($key == 0) { ?> is-visible<? } ?>">
					<div class="wrapper_brand-collections_slider">
						<div class="brand-collections_slider">
                            <? foreach ($arItem['BRANDS'] as $arBrand) { ?>
								<div class="brand-collection_item">
									<a href="<?= $arBrand['DETAIL_PAGE_URL']; ?>">
										<img data-src="<?= $arBrand['COLLECTION_PICTURE']; ?>"
										     alt="<?= $arBrand['NAME']; ?>">
										<span class="item-title"><?= $arBrand['NAME']; ?></span>
									</a>
								</div>
                            <? } ?>
						</div>
						<div class="brand-collections_counter"></div>
					</div>
				</div>
            <? } ?>
			<div class="mobile-visible container">
				<a href="/brands/" class="see-all_mobile-btn main-btn">Смотреть еще
					+<?= $arResult['BRANDS_COUNT']; ?></a>
			</div>
		</div>
	</div>
<? } ?>

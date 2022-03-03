<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */

?>
<div class="col-xl-3 col-lg-4 col-6">
	<div class="new-item">
		<a href="<?= $item['DETAIL_PAGE_URL']; ?>">
            <? if ($item['PREVIEW_PICTURE']['ID']) {
                $picture = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'],
                    ['width' => 321, 'height' => 324],
                    BX_RESIZE_IMAGE_PROPORTIONAL
                )['src'];
                ?>
				<img data-src="<?= $picture; ?>" alt="alt">
            <? } ?>
			<span class="new-item_title"><?= $item['NAME']; ?></span>
			<span class="new-item_see-text">Смотреть <span class="ico-arrow-3"></span></span>
		</a>
	</div>
</div>
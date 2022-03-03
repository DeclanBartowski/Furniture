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
<div class="category-item">
	<a href="<?= $item['DETAIL_PAGE_URL'] ?>">
		<div class="category-item_img">
			<img data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
			     alt="<?= $item['NAME']; ?>">
		</div>
		<span class="category-item_title"><?= $item['NAME']; ?>
				<span class="arrow-icon"></span>
			</span>
	</a>
</div>


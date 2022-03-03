<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

/** @var array $arParams */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var array $arResult */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="main-footer_bottom">
	<div class="row">
		<div class="col-md-2 order-md-2">
            <? if (!empty($arResult['INSTAGRAM']) || !empty($arResult['FACEBOOK'])) { ?>
				<ul class="footer-social">
                    <? if (!empty($arResult['INSTAGRAM'])) { ?>
						<li>
							<a href="<?= $arResult['INSTAGRAM']; ?>">
								<img data-src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/instagram-icon.png"
								     alt="alt">
							</a>
						</li>
                    <? } ?>
                    <? if (!empty($arResult['FACEBOOK'])) { ?>
						<li>
							<a href="<?= $arResult['FACEBOOK']; ?>">
								<img data-src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/fb-icon.svg"
								     alt="alt">
							</a>
						</li>
                    <? } ?>
				</ul>
            <? } ?>
		</div>
		<div class="col-md-5  order-md-1 left-column">
			<div class="copyright">&#169; Архитектура мебели 2021</div>
            <? if (!empty($arResult['LINK_TO_TERMS_OF_USE'])) { ?>
				<a href="<?= $arResult['LINK_TO_TERMS_OF_USE']; ?>" class="footer_terms-use">
					Пользовательское соглашение
				</a>
            <? } ?>
		</div>
		<div class="col-md-5  order-md-3 right-column">
            <? if (!empty($arResult['LINK_TO_TERMS_OF_USE'])) { ?>
				<a href="<?= $arResult['LINK_TO_PRIVACY_POLICY']; ?>" class="footer-policy">
					Политика конфеденциальности
				</a>
            <? } ?>
			<a href="" class="footer-studio">
				<img data-src="<?= SITE_TEMPLATE_PATH; ?>/img/static/studio.svg" alt="alt">
			</a>
		</div>
	</div>
</div>

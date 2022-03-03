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
<figure class="news-detailed_img news-detailed_img-top">
    <? if ($arResult['DETAIL_PICTURE']['ID']) {
        $picture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'],
            ['width' => 1343, 'height' => 452],
            BX_RESIZE_IMAGE_PROPORTIONAL
        )['src'];
        ?>
		<img src="<?= $picture; ?>" alt="alt">
    <? } ?>
	<span class="item-title"><?= $arResult['NAME']; ?></span>
</figure>
<?= $arResult['~DETAIL_TEXT']; ?>
<div class="news-detailed_text">
	<span class="news-detailed_date"><?= $arResult['DISPLAY_ACTIVE_FROM']; ?></span>
	<div class="news-detailed_footer">
		<a href="/news/" class="main-btn back-page_btn">
			<span class="ico-arrow-3"></span>Назад к списку
		</a>
		<div class="right-column">
			<ul class="social-network_mod a2a_kit a2a_kit_size_32 a2a_default_style">
				<li>
					<a class="a2a_button_vk" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/vk.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_facebook" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/fb.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_odnoklassniki" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/odn.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_twitter" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/twitter.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_viber" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/viber.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_whatsapp" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/whatsapp.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_skype" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/skype.svg">
					</a>
				</li>
				<li>
					<a class="a2a_button_telegram" href="javascript:void(0)">
						<img alt="alt" src="<?= SITE_TEMPLATE_PATH;?>/img/icons/social/telegram.svg">
					</a>
				</li>
			</ul>
			<div class="share-box">
				Поделиться
				<svg width="17" height="26" viewBox="0 0 17 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.9521 4.04785L3.23786 12.233L12.9521 21.0479" stroke="black"/>
					<circle cx="3.2381" cy="12.1429" r="2.7381" fill="white" stroke="#1E1E1E"/>
					<circle cx="13.762" cy="3.2381" r="2.7381" fill="white" stroke="#1E1E1E"/>
					<circle cx="13.762" cy="21.8572" r="2.7381" fill="white" stroke="#1E1E1E"/>
				</svg>
			</div>
		</div>
	</div>
</div>

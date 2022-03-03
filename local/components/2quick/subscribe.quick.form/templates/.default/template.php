<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (method_exists($this, 'setFrameMode')) {
    $this->setFrameMode(true);
}

if ($arResult['ACTION']['status'] == 'error') {
    ShowError($arResult['ACTION']['message']);
} elseif ($arResult['ACTION']['status'] == 'ok') {
    ShowNote($arResult['ACTION']['message']);
}
?>

<div class="footer_form-box">
	<div class="section-title white-title">Подписывайтесь
		<span class="min">на наши новости</span>
	</div>
	<form action="<?= POST_FORM_ACTION_URI ?>" method="post" id="asd_subscribe_form" class="footer-form">
        <?= bitrix_sessid_post() ?>
		<input type="hidden" name="asd_subscribe" value="Y"/>
		<input type="hidden" name="charset" value="<?= SITE_CHARSET ?>"/>
		<input type="hidden" name="site_id" value="<?= SITE_ID ?>"/>
		<input type="hidden" name="asd_rubrics" value="<?= $arParams['RUBRICS_STR'] ?>"/>
		<input type="hidden" name="asd_format" value="<?= $arParams['FORMAT'] ?>"/>
		<input type="hidden" name="asd_show_rubrics" value="<?= $arParams['SHOW_RUBRICS'] ?>"/>
		<input type="hidden" name="asd_not_confirm" value="<?= $arParams['NOT_CONFIRM'] ?>"/>
		<input type="hidden" name="asd_key"
		       value="<?= md5($arParams['JS_KEY'] . $arParams['RUBRICS_STR'] . $arParams['SHOW_RUBRICS'] . $arParams['NOT_CONFIRM']) ?>"/>

		<input type="text" name="asd_email" class="form-footer_input" placeholder="Ваш mail">
		<div id="asd_subscribe_res"></div>
		<div class="wrapper_form-footer_submit main-btn">
			<input name="asd_submit" id="asd_subscribe_submit"
			       type="submit" class="form-footer_submit-btn" value="Подписаться">
		</div>
	</form>
</div>

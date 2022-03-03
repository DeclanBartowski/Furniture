<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>
        $('.form-control').focus(function() {
            $(this).closest('.form-group').addClass('focus');
            $(this).closest('.form-group').find('.input_delete-text').addClass('is-visible');
        });
        $('.form-control').blur(function() {
            if ($(this).val().length == 0) {
                $(this).closest('.form-group').removeClass('focus');
                $(this).closest('.form-group').find('.input_delete-text').removeClass('is-visible');
            }
        });
        $('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
            "clearIncomplete": true,
            showMaskOnHover: false,
        });
        $('#callback').modal('hide');
        $('#application-accepted').modal('show');
    </script>
    <?
}
?>
<button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
<div class="section-title text-center">Заказать звонок</div>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="callback-form">
    <?=bitrix_sessid_post()?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="form-group">
		<input type="text" class="form-control requiredField callback-name" name="NAME" required>
		<label class="form-label">Ваше имя*</label>
	</div>
	<div class="form-group">
		<label class="form-label">Телефон*</label>
		<input type="tel" class="form-control requiredField callback-phone" name="PHONE" required>
	</div>
	<div class="wrapper_callback-form-submit main-btn">
		<input type="submit" class="popup-form_submit js_form-submit" value="Заказать звонок" name="submit">
	</div>
	<div class="form-policy">
		Нажимая на кнопку “Заказать звонок” вы даете согласие на <a href="/privacy-policy/" target="_blank">обработку персональных данных</a>.
	</div>
</form>
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
        $('#application-accepted').modal('show');
    </script>
    <?
}
?>
<div class="h3">обратная связь</div>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="contact-form">
    <?=bitrix_sessid_post()?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" class="form-control requiredField callback-name" name="NAME" required>
				<label class="form-label">Фамилия, Имя, Отчество*</label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="form-label">Телефон*</label>
				<input type="tel" class="form-control requiredField callback-phone" required name="PHONE">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="form-label">Почта</label>
				<input type="text" class="form-control" name="EMAIL">
			</div>
		</div>
	</div>
	<div class="form-group form-group_mod">
		<textarea class="form-control requiredField callback-text" name="PREVIEW_TEXT"></textarea>
		<label class="form-label">Ваш вопрос*</label>
	</div>
	<div class="contact-form_footer">
		<div class="form-policy">
			Нажимая на кнопку “Отправить” вы даете согласие на обработку персональных данных.
		</div>
		<div class="wrapper-submit main-btn">
			<input type="submit" class="contact-form_submit-btn js_form-submit" value="Отправить" name="submit">
		</div>
	</div>
</form>

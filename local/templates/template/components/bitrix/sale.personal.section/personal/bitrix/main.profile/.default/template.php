<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

?>

<form method="post" name="form1" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data" role="form" class="personal-data_form">
    <?=$arResult["BX_SESSION_CHECK"]?>
	<input type="hidden" name="lang" value="<?=LANG?>" />
	<input type="hidden" name="ID" value="<?=$arResult["ID"]?>" />
	<input type="hidden" name="LOGIN" value="<?=$arResult["arUser"]["LOGIN"]?>" />
	<div class="h4">Личные данные</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="NAME" class="form-control requiredField callback-name" value="<?=$arResult["arUser"]["NAME"]?>">
				<label class="form-label">Ф. И. О.</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="tel" name="PERSONAL_PHONE" class="form-control requiredField callback-phone" value="<?=$arResult["arUser"]["PERSONAL_PHONE"]?>">
				<label class="form-label">Телефон</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="email" name="EMAIL" class="form-control requiredField callback-email" value="<?=$arResult["arUser"]["EMAIL"]?>">
				<label class="form-label">Почта</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
	</div>
	<div class="h4">Данные для доставки</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="PERSONAL_ZIP" class="form-control requiredField callback-text" value="<?=$arResult["arUser"]["PERSONAL_ZIP"]?>">
				<label class="form-label">Индекс *</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="PERSONAL_CITY" class="form-control requiredField callback-text" value="<?=$arResult['arUser']['PERSONAL_CITY']?>">
				<label class="form-label">Город *</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="PERSONAL_STREET" class="form-control requiredField callback-text" value="<?=$arResult['arUser']['PERSONAL_STREET']?>">
				<label class="form-label">Адрес доставки *</label>
				<span class="input_delete-text ico-close"></span>
			</div>
		</div>
		<div class="offset-md-8 col-md-4">
			<div class="wrapper-submit main-btn">
				<input type="submit" name="save" class="personal-data_form-submit js_form-submit" value="Сохранить">
			</div>
		</div>
	</div>
</form>

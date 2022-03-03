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

<div class="unified-inner_content">
	<div class="h4">Смена пароля</div>
	<form class="password-form" id="change-password">
		<div class="notify"></div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="PASSWORD" value="">
					<label class="form-label">Введите новый пароль</label>
					<span class="input_delete-text ico-close"></span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="CONFIRM_PASSWORD" value="">
					<label class="form-label">Подтвердите пароль</label>
					<span class="input_delete-text ico-close"></span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wrapper-submit main-btn">
					<input type="submit" class="password-form_submit-btn" value="Сохранить">
				</div>
			</div>
		</div>
	</form>
</div>



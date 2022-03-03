<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
global $USER;
if ($USER->IsAuthorized()) {
    localRedirect('/auth/');
}
?>
    <div class="personal-area_section">
        <div class="container">
            <? include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php') ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:system.auth.changepasswd",
                "custom",
                ['AUTH_RESULT' => $APPLICATION->arAuthResult],
                false
            ); ?>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
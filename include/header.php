<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumbs",
    Array(
        "PATH" => "",
        "SITE_ID" => SITE_ID,
        "START_FROM" => "0"
    )
); ?>
<h1 class="white-title"><?= $APPLICATION->ShowTitle(false) ?></h1>

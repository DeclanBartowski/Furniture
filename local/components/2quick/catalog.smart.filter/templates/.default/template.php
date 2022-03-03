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
$this->setFrameMode(true); ?>

<form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get"
      class="smartfilter">
	<input
			class="btn btn-themes"
			type="hidden"
			id="set_filter"
			name="set_filter"
			value="<?= GetMessage("CT_BCSF_SET_FILTER") ?>"
	/>
	<ul class="catalog-filter_list catalog-filter_list-white">
        <?
        //not prices
        foreach ($arResult["ITEMS"] as $key => $arItem) {
            if (
                empty($arItem["VALUES"])
                || isset($arItem["PRICE"])
            ) {
                continue;
            }

            if (
                $arItem["DISPLAY_TYPE"] == "A"
                && (
                    $arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
                )
            ) {
                continue;
            }
            ?>

            <?
            $arCur = current($arItem["VALUES"]);
            switch ($arItem["DISPLAY_TYPE"]) {

                default://CHECKBOXES
                    $checkedItemExist = false;
                    ?>
					<li>
						<select name="<?= $arCur["CONTROL_NAME_ALT"] ?>" class="js-select">
							<option value=""><?= $arItem['NAME']; ?></option>
                            <? foreach ($arItem["VALUES"] as $val => $ar): ?>
								<option <? echo $ar["CHECKED"] ? 'selected' : '' ?>
										value="<? echo $ar["HTML_VALUE_ALT"] ?>">
                                    <? echo $ar["VALUE"] ?>
								</option>
                            <? endforeach ?>
						</select>
					</li>
                <?
            }
            ?>

            <?
        }

        foreach ($arResult["ITEMS"] as $key => $arItem)//prices
        {
            $key = $arItem["ENCODED_ID"];
            if (isset($arItem["PRICE"])):
                if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0) {
                    continue;
                }

                $step_num = 4;
                $step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / $step_num;
                $prices = array();
                if (Bitrix\Main\Loader::includeModule("currency")) {
                    for ($i = 0; $i < $step_num; $i++) {
                        $prices[$i] = [
                            'value' => $arItem["VALUES"]["MIN"]["VALUE"] + $step * $i,
                            'formated' => CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MIN"]["VALUE"] + $step * $i,
                                $arItem["VALUES"]["MIN"]["CURRENCY"], false)
                        ];
                    }
                    $prices[$step_num] = [
                        'value' => $arItem["VALUES"]["MAX"]["VALUE"],
                        'formated' => CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MAX"]["VALUE"],
                            $arItem["VALUES"]["MAX"]["CURRENCY"], false)
                    ];
                }
                else {
                    $precision = $arItem["DECIMALS"] ? $arItem["DECIMALS"] : 0;
                    for ($i = 0; $i < $step_num; $i++) {
                        $prices[$i] = [
                            'value' => $arItem["VALUES"]["MIN"]["VALUE"] + $step * $i,
                            'formated' => number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * $i, $precision, ".",
                                "")
                        ];
                    }
                    $prices[$step_num] = [
                        'value' => $arItem["VALUES"]["MAX"]["VALUE"],
                        'formated' => number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "")
                    ];
                }

                ?>
				<li>
					<select name="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>" class="js-select">
						<option value="">Цена</option>
                        <?
                        for ($i = 0; $i <= $step_num; $i++):
                            if(empty($prices[$i]['value'])){
                                $prices[$i]['value'] = 0;
                            }?>
							<option<? if ($prices[$i]['value'] == $arItem["VALUES"]["MIN"]["HTML_VALUE"] && $arItem["VALUES"]["MIN"]["HTML_VALUE"] != '') {
                                echo ' selected';
                            } ?> value="<?= $prices[$i]['value'] ?>">
								от <?= $prices[$i]['formated']; ?>
							</option>
                        <? endfor; ?>
					</select>
				</li>
            <?endif;
        }
        ?>
	</ul>
</form>

<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>
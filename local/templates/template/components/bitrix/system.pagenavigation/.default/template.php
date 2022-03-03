<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$ClientID = 'navigation_' . $arResult['NavNum'];

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        return;
    }
}
?>
<ul class="main-pagination mobile-hidden">
    <?
    $strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
    $strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
    if ($arResult["bDescPageNumbering"] === true) {


    } else {
        // to show always first and last pages
        $arResult["nStartPage"] = 1;
        $arResult["nEndPage"] = $arResult["NavPageCount"];

        $sPrevHref = '';
        if ($arResult["NavPageNomer"] > 1) {
            $bPrevDisabled = false;

            if ($arResult["bSavePage"] || $arResult["NavPageNomer"] > 2) {
                $sPrevHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1);
            } else {
                $sPrevHref = $arResult["sUrlPath"] . $strNavQueryStringFull;
            }
        } else {
            $bPrevDisabled = true;
        }

        $sNextHref = '';
        if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
            $bNextDisabled = false;
            $sNextHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
        } else {
            $bNextDisabled = true;
        }
        ?>


        <?
        if ($bPrevDisabled):?>
			<li class="disabled"><a href="javascript:void(0)" class="prev-page"></a></li>
        <? else: ?>
			<li><a href="<?= $sPrevHref; ?>" class="prev-page"></a></li>
        <? endif; ?>

        <?
        $bFirst = true;
        $bPoints = false;
        do {
            if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"] - $arResult["nStartPage"] <= 1 || abs($arResult['nStartPage'] - $arResult["NavPageNomer"]) <= 2) {

                if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                    ?>
					<li class="active">
						<a><?= $arResult["nStartPage"] ?></a>
					</li>
                <?
				elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                    ?>
					<li>
						<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
					</li>
                <?
                else:
                    ?>
					<li>
						<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
					</li>
                <?
                endif;
                $bFirst = false;
                $bPoints = true;
            } else {
                if ($bPoints) {
                    ?>
					<li><a>...</a></li><?
                    $bPoints = false;
                }
            }
            $arResult["nStartPage"]++;
        } while ($arResult["nStartPage"] <= $arResult["nEndPage"]);
        ?>
        <?
        if ($bNextDisabled):?>
			<li class="disabled">
				<a class="next-page"></a>
			</li>
        <? else: ?>
			<li>
				<a href="<?= $sNextHref; ?>" class="next-page"></a>
			</li>
        <? endif; ?>
        <?
    }
    ?>
</ul>

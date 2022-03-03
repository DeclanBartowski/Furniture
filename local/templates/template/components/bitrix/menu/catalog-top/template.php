<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (!empty($arResult)) { ?>
	<nav class="head-nav">
		<ul class="head-menu">
            <? foreach ($arResult as $arItem) {
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                    continue;
                }
                ?>
				<li>
					<a href="<?= $arItem["LINK"]; ?>"
                        <?= (!empty($arItem['PARAMS']['ADDITIONAL_CLASS'])) ?
                            sprintf('class="%s"', $arItem['PARAMS']['ADDITIONAL_CLASS']) :
                            '' ?>>
                        <?= $arItem['PARAMS']['ICON']; ?>
                        <?= $arItem["TEXT"] ?>
					</a>
				</li>
            <? } ?>
		</ul>
	</nav>
<? } ?>

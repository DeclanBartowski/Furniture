<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)) { ?>
    <? $cols = array_chunk($arResult, 13); ?>
	<div class="footer-title"><?=$arParams['TITLE'];?></div>
    <? $showOpener = false; ?>
    <? if (count($cols) > 2) {
        $showOpener = true;
    } ?>
	<div class="row">
        <? foreach ($cols as $key => $col) { ?>
			<div class="col-lg-3 col-6<?= ($key > 1) ? ' footer-column' : ''; ?>">
				<ul class="footer-menu">
                    <? foreach ($col as $item) { ?>
						<li><a href="<?= $item["LINK"] ?>"><?= $item["TEXT"] ?></a></li>
                    <? } ?>
				</ul>
			</div>
        <? } ?>
	</div>
    <? if ($showOpener) { ?>
		<div class="mobile-visible">
			<a href="javascript:void(0)" class="main-btn footer-menu_show-menu">
				<span class="text">Развернуть</span> <span class="ico-arrow-2 js_phone-icon"></span>
			</a>
		</div>
    <? } ?>
<? } ?>

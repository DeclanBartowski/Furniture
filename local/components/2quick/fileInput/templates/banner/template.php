<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

?>
<?if ($arResult['FILE_PATH']) {?>
<div class="<?= $arParams['WRAP_CLASS'] ?: 'about-top_banner'?>">
	<img data-src="<?= $arResult['FILE_PATH'];?>" alt="alt">
	<?if ($arParams['TITLE']) {?>
		<span class="unified_banner-title"><?= $arParams['TITLE'];?></span>
	<?}?>
</div>
<?}?>
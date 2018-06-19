<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>
<!-- <form action="#" method="POST">
	<input class="input" type="text" name="search" placeholder="<?=$arPage["SEARCH"]["PLACEHOLDER"]?>" required>
	<button class="search-btn"></button>
</form>
 -->
 <form action="<?=$arResult["FORM_ACTION"]?>">
	<input type="text" class="input" placeholder="<?=$arParams["PLACEHOLDER"]?>" name="q" value="" />
	<input type="hidden" name="i" value="<?=$arParams["SECTION_ID"]?>">
	<button name="s" class="search-btn" type="submit"></button>
</form>
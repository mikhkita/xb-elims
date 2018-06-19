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

<form action="<?=$arResult["FORM_ACTION"]?>">
	<input type="text" placeholder="Поиск по сайту" style="display: none;" name="q" value="" size="15" maxlength="50" />
	<input name="s" class="search-btn" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" style="display: none;"/>
</form>
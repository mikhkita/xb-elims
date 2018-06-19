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
<form action="<?=$arResult["FORM_ACTION"]?>" class="search-detail-form left">
	<input type="text" class="input" placeholder="Поиск по сайту" name="q" value="<?=( isset($_GET["q"])?$_GET["q"]:"" )?>" size="15" maxlength="50" />
	<button name="s" class="search-btn" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"></button>
</form>
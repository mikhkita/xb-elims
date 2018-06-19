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
$this->setFrameMode(true);

$GLOBALS["SPECIALISTS"] = $arResult["UF_SPECIALISTS"];

?>

<h1><?=$arResult["NAME"]?><?if($arResult["UF_DOP"]):?> (<?=$arResult["UF_DOP"]?>)<?endif;?></h1>
<?=preg_replace("#(<[^\/]>\s*<\/.+?>)#uis", "", $arResult["DESCRIPTION"])?>
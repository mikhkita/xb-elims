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

?>

<ul class="<?=$arParams["FILTER_CLASS"]?>">
	<li class="active" data-filter="*">Все</li>
	<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
		<? if( $arItem['ID'] != 14 && intval($arItem["ELEMENT_CNT"]) > 0 ): ?>
			<li data-filter=".doctor-<?=$arItem["ID"]?>"><?=$arItem["NAME"]?></li>
		<? endif; ?>
	<? endforeach; ?>
</ul>


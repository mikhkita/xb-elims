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

<ul class="articles-filter">
	<li data-hash="#all" data-href="<?=$arResult['SECTIONS'][0]["LIST_PAGE_URL"]?>?partial=1" class="active">Все</li>
	<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
		<? if( intval($arItem["ELEMENT_CNT"]) > 0 ): ?>
			<li data-hash="#<?=$arItem["CODE"]?>" data-href="<?=$arItem["LIST_PAGE_URL"]?>?partial=1&artSection=<?=$arItem["ID"]?>"><?=$arItem["NAME"]?></li>
		<? endif; ?>
	<? endforeach; ?>
</ul>
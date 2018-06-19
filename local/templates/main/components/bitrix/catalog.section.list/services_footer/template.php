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

$rows = 5;

?>

<ul class="left">
	<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
		<li><a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
		<? if( ($key+1) % $rows == 0 ): ?>
			</ul>
			<ul class="left">
		<? endif; ?>
		<? if( ($key+1) == count( $arResult["SECTIONS"] ) ): ?>
			<li><a href="/actions/">Акции</a></li>
			<li><a href="/price-list/">Прайс-лист</a></li>
		<? endif; ?>
	<? endforeach; ?>
</ul>


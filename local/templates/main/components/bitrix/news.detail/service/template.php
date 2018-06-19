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
<div class="b-side-left b-text">
	<?=preg_replace("#(<[^\/]>\s*<\/.+?>)#uis", "", $arResult["DETAIL_TEXT"])?>
</div>
<div class="b-side-right">
	<div class="b-side-back"></div>
	<div class="b-side-content">
		<h3>Куда обратиться</h3>
		<div class="b-side-address">
			<div class="icon-pin"></div>
			<h4><?=includeArea("addr-1")?></h4>
			<div class="p"><?=includeArea("time")?></div>
			<?=includeArea("phone-1")?>
		</div>
		<div class="b-side-address">
			<div class="icon-pin"></div>
			<h4><?=includeArea("addr-2")?></h4>
			<div class="p"><?=includeArea("time")?></div>
			<?=includeArea("phone-2")?>
		</div>
	</div>
	<div class="b-center">
		<a href="#" class="b-btn b-btn-red">Записаться на прием</a>
	</div>
</div>
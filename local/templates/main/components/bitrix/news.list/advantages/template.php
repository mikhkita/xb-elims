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
<div class="b b-slider">
	<div class="slider-back">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 750, "height" => 1100),BX_RESIZE_IMAGE_EXACT ); ?>
			<div style='background-image: url("<?=$renderImage['src']?>");'><span class="b-brown"></span></div>
		<?endforeach;?>
	</div>
	<div class="b-block slider-cont">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div>
				<div>
					<?=$arItem["PREVIEW_TEXT"]?>
					<? if($arItem["PROPERTIES"]["LINK"]["VALUE"]): ?>
						<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="btn">Узнать подробнее</a>
					<? endif; ?>
				</div>
			</div>
		<?endforeach;?>
	</div>
</div>
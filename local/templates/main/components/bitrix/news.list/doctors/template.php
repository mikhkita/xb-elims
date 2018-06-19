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

<div class="b-specialists-list clearfix">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<? $smallImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 267, "height" => 400),BX_RESIZE_IMAGE_EXACT ); ?>
	<? $retinaImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 534, "height" => 800),BX_RESIZE_IMAGE_EXACT ); ?>
	<div class="b-specialists-item">
		<div class="specialist-img" style="background-image: url('<?=$smallImage["src"]?>');" data-retina="<?=$retinaImage["src"]?>"></div>
		<h3 class="specialist-name"><?=$arItem["NAME"]?></h3>
		<p class="specialist-post"><?=$arItem["PROPERTIES"]["SPEC"]["VALUE"]?></p>
	</div>
	<?endforeach;?>
</div>
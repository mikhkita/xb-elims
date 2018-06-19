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

<ul class="b-other-actions">
	<? foreach ($arResult["ITEMS"] as $j => $arItem): ?>
		<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 160, "height" => 160),BX_RESIZE_IMAGE_EXACT ); ?>
		<li>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="clearfix">
				<div class="b-img-cont">
					<div class="b-img" style="background-image: url('<?=$renderImage["src"]?>');"></div>
				</div>
				<h3><?=$arItem["NAME"]?></h3>
			</a>
		</li>
	<? endforeach; ?>
</ul>
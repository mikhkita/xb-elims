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

<? foreach ($arResult["SECTIONS"] as $i => $arSection): ?>
	<? $renderImage = CFile::ResizeImageGet($arSection["PICTURE"], Array("width" => 280, "height" => 280), BX_RESIZE_IMAGE_EXACT, false, false, false, 60 ); ?>
	<div class="b-services-item">
		<div class="b-services-img" style="background-image: url('<?=$renderImage["src"]?>');"></div>
		<div class="b-services-content">
			<h3><?=$arSection["NAME"]?></h3>
			<ul>
				<? foreach ($arSection["ITEMS"] as $j => $arItem): ?>
					<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
				<? endforeach; ?>	
			</ul>
		</div>
	</div>
<? endforeach; ?>
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
<div class="b-reviews-list clearfix">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 280, "height" => 280), BX_RESIZE_IMAGE_EXACT ); ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="b-review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="b-review-top">
				<div class="b-review-img" style="background-image: url('<?=$renderImage["src"]?>');"></div>
				<div class="b-review-name">
					<h3><?=$arItem["NAME"]?></h3>
					<p class="b-review-date"><?=getRusMonth($arItem["PROPERTIES"]["DATE"]["VALUE"])?></p>
				</div>
			</div>
			<p class="b-review-text"><?=$arItem["PREVIEW_TEXT"]?></p>
			<? if( $arItem["PROPERTIES"]["LINK"]["VALUE"] ): ?>
				<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="read-more icon-more" target="_blank">Читать на флампе</a>
			<? endif; ?>
		</div>										
	<?endforeach;?>
</div>
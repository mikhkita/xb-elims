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
<? if(count($arResult["ITEMS"])): ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 750, "height" => 750), BX_RESIZE_IMAGE_EXACT ); ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="b-stock-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="b-stock-img" style="background-image: url('<?=$renderImage["src"]?>');"></div>
			<div class="b-stock-content">
				<h3><?=$arItem["NAME"]?></h3>
				<p class="b-stock-date"><?=getRusMonth(array_shift(explode(" ", $arItem["ACTIVE_FROM"])))?></p>
				<p class="b-stock-text"><?=$arItem["PREVIEW_TEXT"]?></p>
			</div>
		</a>
	<?endforeach;?>
<? else: ?>
	<div class="b-text">
		<br>
		На данный момент нет <? if($arResult["ID"] == 11): ?>новостей<? else: ?>активных акций<? endif; ?>
		<br><br>
	</div>
<? endif; ?>
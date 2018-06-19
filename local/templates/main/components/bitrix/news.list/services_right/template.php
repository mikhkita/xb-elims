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

$index = 0;

$secCode = $_GET["SECTION_CODE"];
$elCode = ( !isset($_GET["ELEMENT_CODE"]) ) ? false : $_GET["ELEMENT_CODE"];

?>

<div class="<?=( ($_GET["PARENT_CODE"] == "plasticheskaya-khirurgiya")?"service-plastika":"service-accord" )?>">
	<? foreach ($arResult["SECTIONS"] as $i => $arSection): ?>
		<? if( $_GET["PARENT_CODE"] != "plasticheskaya-khirurgiya" ): ?>
			<h3 data-href="<?=$arSection["SECTION_PAGE_URL"]?>"<? if($secCode == $arSection["CODE"]): ?> class="active"<? endif; ?> data-id="<?=$index?>"><i class="<?=$arSection["UF_CLASS"]?>"></i><span><?=$arSection["NAME"]?></span><a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="to-index"><?=$arSection["NAME"]?></a></h3>
			<div>
				<? foreach ($arSection["ITEMS"] as $j => $arItem): ?>
					<a href="/services/<?=$_GET["PARENT_CODE"]?>/<?=$arSection["CODE"]?>/<?=$arItem["CODE"]?>/"<? if($elCode == $arItem["CODE"] && $_GET["SECTION_CODE"] == $arSection["CODE"]): ?> class="active" onclick="return false;"<? endif; ?>><?=$arItem["NAME"]?></a>
				<? endforeach; ?>
			</div>
		<? else: ?>
			<a href="<?=$arSection["SECTION_PAGE_URL"]?>"<? if($secCode == $arSection["CODE"]): ?> class="active"<? endif; ?> data-id="<?=$index?>"><i class="<?=$arSection["UF_CLASS"]?>"></i><span><?=$arSection["NAME"]?></span></a>
		<? endif; ?>
	<? $index++; endforeach; ?>
</div>
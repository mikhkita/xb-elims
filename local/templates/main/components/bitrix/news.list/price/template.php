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
		<? if( count($arSection["ITEMS"]) ): ?>
			<h2><?=$arSection["NAME"]?></h2>
			<ul>
				<? foreach ($arSection["ITEMS"] as $j => $arItem): ?>
					<?

					$arr = explode(" ", $arItem["NAME"]);
					foreach ($arr as $key => $value) {
						$arr[$key] = "<span>".$value." </span>";
						if( $value == "" ){
							unset($arr[$key]);
						}
					}
					$arItem["NAME"] = implode("", $arr);

					?>
					<li data-id="el-<?=$arItem["ID"]?>" class="clearfix">
						<div><?=$arItem["NAME"]?></div>
						<div class="b-right-col"><? if($arItem["PROPERTIES"]["FROM"]["VALUE"]): ?>от <? endif; ?><?=((ctype_digit($arItem["PROPERTIES"]["PRICE"]["VALUE"])) ? str_replace(".", "&nbsp;", number_format($arItem["PROPERTIES"]["PRICE"]["VALUE"], 0, ',', "." )): str_replace(array("&nbsp;+", "&nbsp;д"), array(" +", " д"), str_replace(" ", "&nbsp;", $arItem["PROPERTIES"]["PRICE"]["VALUE"])) )?></div>
					</li>
				<? endforeach; ?>
			</ul>
		<? endif; ?>
	<? endforeach; ?>
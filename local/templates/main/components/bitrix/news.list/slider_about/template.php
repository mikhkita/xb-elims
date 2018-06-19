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
<div class="left-slider left">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 732, "height" => 496), BX_RESIZE_IMAGE_EXACT ); ?>
    <div class="left-slide" >
        <img src="<?=$renderImage["src"]?>" alt="">
    </div>
    <?endforeach;?>
</div>
<div class="about-right-slider-header">о компании</div>
<div class="right-slider left">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="about-text-slide">
        <div class="about-slide">
            <h2><?=$arItem["NAME"]?></h2>
            <p><?=$arItem["PREVIEW_TEXT"]?></p>
            <? if( $arItem["PROPERTIES"]["LINK"]["VALUE"] ): ?>
            <a class="b-btn" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">подробнее <div class="arrow"></div></a>
            <? endif; ?>
        </div>                          
    </div>
    <?endforeach;?>
</div>  
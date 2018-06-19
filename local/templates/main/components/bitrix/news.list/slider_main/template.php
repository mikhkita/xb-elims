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
<div class="b-slider">
    <div class="b-slider-content">
        <div class="b-slider-content-wrap">
            <div class="b-slider-content-item">
                <div class="b-block">
                    <h2>Сеть стоматологических клиник</h2>
                    <h2><span class="blue">Smile</span> <span class="red">Clinic</span>
                    <span class="b-slider-text-small">professional</span></h2>
                    <a href="/about/" class="b-btn">Подробнее</a>
                    <div class="b-mobile-margin"></div>
                </div>
            </div>
        </div>
        <div class="b-slider-content-wrap">
            <div class="b-slider-content-item">
                <div class="b-block">
                    <h2>Сеть стоматологических клиник</h2>
                    <h2><span class="blue">Smile</span> <span class="red">Clinic</span>
                    <span class="b-slider-text-small">professional</span></h2>
                    <a href="/about/" class="b-btn">Подробнее</a>
                    <div class="b-mobile-margin"></div>
                </div>
            </div>
        </div>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="b-slider-content-wrap">
                <div class="b-slider-content-item">
                    <div class="b-block">
                        <h2><?=$arItem["NAME"]?></h2>
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <? if( $arItem["PROPERTIES"]["LINK"]["VALUE"] ): ?>
                            <a class="b-btn" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">Подробнее</a>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
    <div class="b-slider-back">
        <div class="b-slider-back-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/html/i/slider-4.jpg')"></div>
        <div class="b-slider-back-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/html/i/slider-2.jpg')"></div>
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 2048, "height" => 1120), BX_RESIZE_IMAGE_EXACT, false, false, false, 60 ); ?>
        <div class="b-slider-back-item" style="background-image: url('<?=$renderImage["src"]?>')"></div>
        <?endforeach;?>
    </div>
    <div class="b-slider-back-white"></div>
</div>
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
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="b-photo">
    <div class="b-block">
        <h2 class="b-title"><?=$arItem["NAME"]?></h2>
    </div>
    <div class="b-photo-slider clearfix">
    <? foreach ($arItem["PROPERTIES"]["PHOTO"]["VALUE"] as $key => $value): ?>
        <? $renderImage = CFile::ResizeImageGet($value, Array("width" => 1728, "height" => 1050), BX_RESIZE_IMAGE_EXACT, false, false, false, 60 ); ?>
        <div class="b-photo-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="b-photo-back"></div>
            <div class="b-photo-img" style="background-image: url('<?=$renderImage["src"]?>');"></div>
        </div>
    <? endforeach; ?>
    </div>
</div>
<?endforeach;?>
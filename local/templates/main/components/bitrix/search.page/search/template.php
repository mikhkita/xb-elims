<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

// print_r($arResult);

$_GET["PAGEN_1"] = !isset($_GET["PAGEN_1"]) ? 1 : $_GET["PAGEN_1"];

$isLast = ( intval($_GET["PAGEN_1"]) == intval($arResult["NAV_RESULT"]->NavPageCount) );

?>
<? if(count($arResult["SEARCH"])): ?>
<ul class="search-detail-block ul-ajax"<? if( !$isLast ): ?> data-next="/search/?q=<?=( (isset($_GET["q"]))?$_GET["q"]:"" )?><?=( (isset($_GET["i"]))?("&i=".$_GET["i"]):"" )?>&partial=1&PAGEN_1=<?=(intval($_GET["PAGEN_1"])+1)?>"<? endif; ?>>
	<?foreach($arResult["SEARCH"] as $arItem):?>
		<li>
			<div class="search-header clearfix">
				<h3 class="left"><?=$arItem["TITLE"]?></h3>
				<div class="right b-search-result-section">
					<?=$arItem["CHAIN_PATH"]?>
				</div>
			</div>
			<div class="search-text">
				<p><?=$arItem["BODY_FORMATED"]?></p>
				<a href="<?=$arItem["URL_WO_PARAMS"]?>" class="link">Читать полностью</a>
			</div>
		</li>
	<?endforeach;?>
</ul>
<? else: ?>
	<p class="b-empty"><br>По вашему запросу ничего не найдено<br><br></p>
<? endif; ?>

<? if( !$isLast && count($arResult["SEARCH"]) ): ?>
	<div class="show-next">
		<i class="icon-refresh"></i><span data-href="/search/?q=<?=( (isset($_GET["q"]))?$_GET["q"]:"" )?><?=( (isset($_GET["i"]))?("&i=".$_GET["i"]):"" )?>&partial=1&PAGEN_1=<?=(intval($_GET["PAGEN_1"])+1)?>">Показать еще</span>
	</div>
<? endif; ?>

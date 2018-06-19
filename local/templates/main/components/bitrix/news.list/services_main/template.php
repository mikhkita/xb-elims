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

<div class="mobile">
	<h2>Услуги</h2>
	<div class="p_services_mobile_menu mobile" id="accordion">
		<? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
			<h3 class="icon-<?=$arSection["UF_CLASS"]?>"><span><?=$arSection["NAME"]?></span></h3>
			<div>
				<ul>
					<? foreach ($arSection["ITEMS"] as $j => $arItem): ?>
						<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
					<? endforeach; ?>		
				</ul>						
			</div>					
		<? endforeach; ?>
	</div>						
</div>	
<div class="services-texts notmobile">
	<? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
		<div data-id="<?=$arSection["ID"]?>" class="services-text-container<? if( $arSection["ID"] == 2 ): ?> show<? endif; ?>">
			<div class="services-text">
				<h3><?=$arSection["NAME"]?></h3>
				<p><?=$arSection["DESCRIPTION"]?></p>
				<a href="/services/#<?=$arSection["UF_CLASS"]?>">Список услуг</a>
			</div>
		</div>
	<? endforeach; ?>
</div>
<div class="services-images notmobile">
	<? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
		<div data-id="<?=$arSection["ID"]?>" class="services-image img_<?=$arSection["UF_CLASS"]?><? if( $arSection["ID"] == 2 ): ?> show<? endif; ?>"></div>
	<? endforeach; ?>
</div>
<div id="services_menu" class="services-menu notmobile">
	<ul >
		<? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
			<li><button data-id="<?=$arSection["ID"]?>"<? if( $arSection["ID"] == 2 ): ?> class="active"<? endif; ?>><?=$arSection["NAME"]?></button></li>
		<? endforeach; ?>
	</ul>
</div>
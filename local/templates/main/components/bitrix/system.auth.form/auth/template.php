<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="b-auth-buttons">
<? foreach ($arResult["AUTH_SERVICES"] as $arService): ?>
	<button class="b-auth-button b-<?=$arService["ICON"]?>" onclick="<?=$arService["ONCLICK"]?>"><?=$arService["NAME"]?></button>
<? endforeach; ?>
</div> 
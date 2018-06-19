<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if( isset($_GET["PARENT_CODE"]) && CModule::IncludeModule("iblock")){
	$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>7, 'GLOBAL_ACTIVE'=>'Y', 'CODE' => $_GET["PARENT_CODE"]), false, array("UF_H1", "UF_TITLE", "UF_KEYWORDS", "UF_DESCRIPTION") );
	$arSection = $items->GetNext();

	$sections = array();
	$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>7, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => $arSection["ID"]), false );
	while($arItem = $items->GetNext()){
	    array_push($sections, $arItem["ID"]);
	}

	if( !count($sections) )
		$sections = false;

	$APPLICATION->SetPageProperty("keywords", $arSection["UF_KEYWORDS"]);
	$APPLICATION->SetPageProperty("description", $arSection["UF_DESCRIPTION"]);
	$APPLICATION->SetTitle($arSection["UF_TITLE"]);

	$APPLICATION->AddChainItem($arSection["NAME"], $arSection["SECTION_PAGE_URL"]);

	$GLOBALS["priceSectionFilter"] = array("SECTION_ID" => $sections); 
}

?>

<div class="b-other-content">
	<div class="b-block">
		<h1 class="title"><?=$arSection["UF_H1"]?></h1>
		<table class="price">
			<thead>
				<tr>
					<th>НАЗВАНИЕ УСЛУГИ</th>
					<th>ЦЕНА,&nbsp;РУБ.</th>
				</tr>
			</thead>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"price",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"CACHE_TIME" => "0",
					"CACHE_TYPE" => "N",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","IBLOCK_SECTION_ID"),
					"FILTER_NAME" => "priceSectionFilter",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "7",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "500",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("PRICE","FROM","SERVICE","PRICE_ITEM"),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC"
				)
			);?>
		</table>
		<div class="b-text"><p>Цены в данном разделе представлены для ознакомления и не являются публичной офертой.<br>Окончательная стоимость лечения определяется после очного осмотра и проведения диагностики.<br><br></p></div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
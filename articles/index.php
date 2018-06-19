<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "статьи стоматологии, все о стоматологии, все о косметологии, статьи косметологии");
$APPLICATION->SetPageProperty("description", "Полезная информация о стоматологии и косметологии.");
$APPLICATION->SetTitle("Полезно знать");

if( isset($_GET["artSection"]) ){
	$GLOBALS["artFilter"] = array( "SECTION_ID" => $_GET["artSection"] );
}

?>
<? if( !isset($_GET["partial"]) ): ?>
<div class="b-other-content">
	<div class="b-block">
		<h1 class="title"><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/text/articles/title.php"
			)
		);?></h1>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "articles", Array(
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"CACHE_GROUPS" => "N",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
				"IBLOCK_ID" => "3",	// Инфоблок
				"IBLOCK_TYPE" => "content",	// Тип инфоблока
				"SECTION_CODE" => "",	// Код раздела
				"SECTION_FIELDS" => array(	// Поля разделов
					0 => "",
				),
				"SECTION_ID" => $_REQUEST["SECTION_CODE"],	// ID раздела
				"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
				"SECTION_USER_FIELDS" => array(	// Свойства разделов
					1 => "",
				),
				"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
				"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
				"VIEW_MODE" => "LINE",	// Вид списка подразделов
				"FILTER_CLASS" => "filter clearfix",
			),
			false
		);?>
	</div>
</div>
<div class="b-other-content b-grey">
	<div class="b-block">
<? endif; ?> 
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"articles",
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
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","",""),
				"FILTER_NAME" => "artFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "3",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "6",
				"PAGER_BASE_LINK" => "",
				"PAGER_BASE_LINK_ENABLE" => "Y",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_PARAMS_NAME" => "arrPager",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_TEMPLATE" => "modern",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("","SPEC",""),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
		);?>
<? if( !isset($_GET["partial"]) ): ?>
	</div>
</div>
<? endif; ?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
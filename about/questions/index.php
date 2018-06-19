<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "отзывы cosmodent");
$APPLICATION->SetPageProperty("description", "Отзывы о работе клиники COSMODENT в Томске.");
$APPLICATION->SetTitle("Вопросы врачу");
?>
<? if( !isset($_GET["partial"]) ): ?>
<div class="b-other-content">
	<div class="b-block">
		<div class="contacts-cont">
			<h1 class="title"><?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
			        "AREA_FILE_SHOW" => "file", 
			        "PATH" => "/include/text/questions/title.php"
			    )
			);?></h1>
			<div class="b-text">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				        "AREA_FILE_SHOW" => "file", 
				        "PATH" => "/include/text/questions/text.php"
				    )
				);?>
			</div>
			<!-- <button class="btn btn-brown fancy b-review-auth-butt" <? if ($USER->IsAuthorized()): ?>style="display:none;"<? endif; ?> data-block="#b-popup-auth">Оставить отзыв</button> -->
			<!-- <button class="btn btn-brown fancy b-review-write-butt" <? if (!$USER->IsAuthorized()): ?>style="display:none;"<? endif; ?> data-block="#b-popup-review">Оставить отзыв</button> -->
			<button class="btn btn-brown fancy b-review-write-butt" data-block="#b-popup-question">Задать вопрос</button>
		</div>
<? endif; ?> 
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"questions",
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
				"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT",""),
				"FILTER_NAME" => "arFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "10",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "9",
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
				"PROPERTY_CODE" => array("NAME","DATE"),
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
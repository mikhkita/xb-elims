<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "стоматология томск, сеть стоматологий");
$APPLICATION->SetPageProperty("description", "Сеть стоматологий «Smile Clinic»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Стоматология «Smile Clinic» в Томске");
?>
<div class="b-block">
	<div class="b-services-list clearfix">
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"services",
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
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","IBLOCK_SECTION_ID"),
				"FILTER_NAME" => "servSectionFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "999",
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
				"PROPERTY_CODE" => array("SPEC",""),
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
				"SORT_ORDER2" => "ASC",
				"WITH_NUM" => "Y"
			)
		); ?>
		<div class="b b-statistics">
			<h2><?=includeArea("num-title")?></h2>
			<div class="b-statistics-line clearfix">
				<div class="b-statistics-item b-statistics-third">
					<div class="b-statistics-icon icon-clock-stat"></div>
					<h3><?=includeArea("num-1-t")?></h3>
					<div class="p"><?=includeArea("num-1-p")?></div>
				</div>
				<div class="b-statistics-item b-statistics-third">
					<div class="b-statistics-icon icon-doctor"></div>
					<h3><?=includeArea("num-2-t")?></h3>
					<div class="p"><?=includeArea("num-2-p")?></div>
				</div>
				<div class="b-statistics-item b-statistics-third">
					<div class="b-statistics-icon icon-child"></div>
					<h3><?=includeArea("num-7-t")?></h3>
					<div class="p"><?=includeArea("num-7-p")?></div>
				</div>
			</div>
			<div class="b-statistics-line clearfix">
				<div class="b-statistics-item b-statistics-half">
					<div class="b-statistics-icon icon-patients"></div>
					<h3><?=includeArea("num-3-t")?></h3>
					<div class="p"><?=includeArea("num-3-p")?></div>
				</div>
				<div class="b-statistics-item b-statistics-half">
					<div class="b-statistics-icon icon-micro"></div>
					<h3><?=includeArea("num-6-t")?></h3>
					<div class="p"><?=includeArea("num-6-p")?></div>
				</div>
			</div>
			<div class="b-statistics-line clearfix">
				<div class="b-statistics-item b-statistics-half">
					<div class="b-statistics-icon icon-therapy"></div>
					<h3><?=includeArea("num-4-t")?></h3>
					<div class="p"><?=includeArea("num-4-p")?></div>
				</div>
				<div class="b-statistics-item b-statistics-half">
					<div class="b-statistics-icon icon-frame"></div>
					<h3><?=includeArea("num-5-t")?></h3>
					<div class="p"><?=includeArea("num-5-p")?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-center">
		<a href="#b-popup-register" class="fancy b-btn b-btn-red">Записаться на прием</a>
	</div>
</div>

<div class="b-about b-gray-block">
	<div class="b-block">
		<div class="b-about-content clearfix">
			<div class="b-about-left">
				<div class="b-about-header clearfix">
					<div class="b-about-header-item">
						<h2>Стоматология</h2>
					</div>
					<div class="b-about-header-item">
						<h2 class="blue">Smile</h2><h2 class="red">Clinic</h2>
						<p>Professional</p>
					</div>
				</div>
				<div class="p"><?=includeArea("about-main-text")?></div>
				<a data-fancybox href="https://www.youtube.com/watch?v=2R4w04xAzYg"  class="b-about-video">
					<div class="b-video-back"></div>
					<div class="b-video-translucent"></div>
					<div class="b-video">
						<div class="b-video-circle"></div>
						<div class="b-video-play"></div>
					</div>
				</a>
			</div>
			<div class="b-about-right">
				<div class="b-about-list">
					<div class="b-about-item">
						<div class="b-about-img"><div class="icon-situation"></div></div>
						<div class="b-about-text">
							<h3><?=includeArea("about-1-t")?></h3>
							<div class="p"><?=includeArea("about-1-p")?></div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img"><div class="icon-equipment"></div></div>
						<div class="b-about-text">
							<h3><?=includeArea("about-2-t")?></h3>
							<div class="p"><?=includeArea("about-2-p")?></div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img"><div class="icon-spec"></div></div>
						<div class="b-about-text">
							<h3><?=includeArea("about-3-t")?></h3>
							<div class="p"><?=includeArea("about-3-p")?></div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img"><div class="icon-price"></div></div>
						<div class="b-about-text">
							<h3><?=includeArea("about-4-t")?></h3>
							<div class="p"><?=includeArea("about-4-p")?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-center">
			<a href="/about/" class="b-btn">Подробнее о клиниках</a>
		</div>
	</div>
</div>

<div class="b-photo">
	<div class="b-block">
		<h2 class="b-title"><?=includeArea("photo-title")?></h2>
	</div>
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"photo",
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
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","IBLOCK_SECTION_ID"),
			"FILTER_NAME" => "servSectionFilter",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "6",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "999",
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
			"PROPERTY_CODE" => array("SPEC",""),
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
	); ?>
</div>

<div class="b-reviews">
	<div class="b-block">
		<h2 class="b-title"><?=includeArea("reviews-title")?></h2>
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"reviews_main",
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
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","IBLOCK_SECTION_ID"),
				"FILTER_NAME" => "arFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "9",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "10",
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
				"PROPERTY_CODE" => array("SPEC",""),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "PROPERTY_DATE",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
			)
		);?>
		<div class="b-center">
			<a href="https://tomsk.flamp.ru/firm/smajjl_klinik_stomatologicheskaya_klinika-422741746485367" class="b-btn" target="_blank">Читать отзывы на флампе</a>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
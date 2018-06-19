<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "стоматология томск, косметология томск");
$APPLICATION->SetPageProperty("description", "Клиника COSMODENT решает множество вопросов по оздоровлению и поддержанию естественной красоты, делая акцент на создании обворожительной улыбки и совершенной кожи.");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Авторская клиника COSMODENT");
?>
<div class="b b-what">
	<div class="b-block clearfix">
		<div class="right text">
			<h2><?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				        "AREA_FILE_SHOW" => "file", 
				        "PATH" => "/include/text/index/cosmodent.php"
				    )
				);?></h2>
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
			        "AREA_FILE_SHOW" => "file", 
			        "PATH" => "/include/text/index/cosmodent_text.php"
			    )
			);?>			
			<a href="/about/" class="link">Читать полностью</a>
		</div>
		<div class="left img"></div>
	</div>
</div>
<? if(1): ?>
<!-- Преимущества -->
<?$APPLICATION->IncludeComponent("bitrix:news.list", "advantages", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "4",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
<?endif;?>
<!-- Услуги -->
<?
CModule::IncludeModule("iblock");

$arSections = array();
$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>1, 'GLOBAL_ACTIVE'=>'Y', 'CODE' => array("stomatologiya", "kosmetologiya-spa")), false, array("UF_H1") );
while($arItem = $items->GetNext()){
    array_push($arSections, $arItem);
}

?>

<? foreach ($arSections as $arSection): ?>
<?

$sections = array();
$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>1, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => $arSection["ID"]), false );
while($arItem = $items->GetNext()){
    array_push($sections, $arItem["ID"]);
}

if( !count($sections) )
	$sections = false;

$GLOBALS["priceSectionFilter"] = array("SECTION_ID" => $sections); 

?>
<div class="b b-services b-<?=$arSection["CODE"]?>">
	<div class="b-block">
		<div class="b-title-line clearfix">
			<h2 class="title left"><?=$arSection["UF_H1"]?></h2>
			<? if($arSection["CODE"] == "stomatologiya"): ?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:search.form",
					"section",
					Array(
						"PAGE" => "/search/",
						"USE_SUGGEST" => "N",
						"PLACEHOLDER" => "Поиск услуги",
						"SECTION_ID" => "1"
					)
				);?>
			<? endif; ?>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "services_main", Array(
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"CACHE_GROUPS" => "N",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
				"IBLOCK_ID" => "1",	// Инфоблок
				"IBLOCK_TYPE" => "content",	// Тип инфоблока
				"SECTION_CODE" => "",	// Код раздела
				"SECTION_FIELDS" => array(	// Поля разделов
					0 => "DESCRIPTION",
					1 => "PICTURE",
					2 => "",
				),
				"SECTION_ID" => $arSection["ID"],	// ID раздела
				"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
				"SECTION_USER_FIELDS" => array(	// Свойства разделов
					0 => "UF_CLASS",
					1 => "UF_SHORT_DESCRIPTION",
					2 => "UF_DOP",
				),
				"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
				"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
				"VIEW_MODE" => "LINE",	// Вид списка подразделов
			),
			false
		);?>
	</div>
</div>
<? endforeach; ?>

<!-- Врачи -->
<div class="b b-doctors">
	<div class="b-block">
		<h2 class="title">Наши врачи</h2>
		<? $GLOBALS["arFilter"] = array("!SECTION_ID" => array(14)); 
		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"doctors_main",
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
				"IBLOCK_ID" => "2",
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
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC"
			)
		);?>
	</div>
</div>

<div class="b b-articles">
	<div class="b-block">
		<h2 class="title">Cтатьи</h2>
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"articles_bottom",
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
				"FILTER_NAME" => "artFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "3",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "4",
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
				"PROPERTY_CODE" => array("DATE","LINK"),
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
				"SORT_ORDER2" => "ASC",
				"WITHOUT_FILTER" => "Y",
				"WITHOUT_HOVER" => "Y",
				"CUSTOM_CLASS" => "articles-slider",
			)
		);?>
		<br>
		<a href="/articles/" class="btn btn-brown">Читать дальше</a>
	</div>
</div>
<!-- Отзывы -->
<div class="b b-reviews">
	<div class="b-block">
		<h2 class="title">Отзывы</h2>
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
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
		);?>
		<button class="btn btn-brown fancy b-review-auth-butt" <? if ($USER->IsAuthorized()): ?>style="display:none;"<? endif; ?> data-block="#b-popup-auth">Оставить отзыв</button>
		<button class="btn btn-brown fancy b-review-write-butt" <? if (!$USER->IsAuthorized()): ?>style="display:none;"<? endif; ?> data-block="#b-popup-review">Оставить отзыв</button>
	</div>
</div>

<div class="b b-contacts">
	<div class="b-block">
		<h2 class="title">Cosmodent на карте</h2>
		<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
		        "AREA_FILE_SHOW" => "file", 
		        "PATH" => "/include/text/index/timetable.php"
		    )
		);?>
	</div>
</div>
<div id="map_canvas"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
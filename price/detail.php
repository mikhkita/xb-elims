<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><div class="b-other-content">
	<div class="b-block text-contain clearfix">
		<div class="service-text left">
			<div class="b-text">
				<? if( isset($_GET["ELEMENT_CODE"]) ): ?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.detail",
						"service",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_ELEMENT_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"BROWSER_TITLE" => "-",
							"CACHE_GROUPS" => "N",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
							"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
							"FIELD_CODE" => array("ID","CODE","NAME","DETAIL_TEXT",""),
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "content",
							"IBLOCK_URL" => "",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"MESSAGE_404" => "",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Страница",
							"PROPERTY_CODE" => array("SPECIALISTS",""),
							"SET_BROWSER_TITLE" => "Y",
							"SET_CANONICAL_URL" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"USE_PERMISSIONS" => "N",
							"USE_SHARE" => "N"
						)
					);?>
				<? else: ?>
					<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "service", Array(
						"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
							"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
							"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
							"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
							"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
							"BROWSER_TITLE" => "NAME",	// Установить заголовок окна браузера из свойства
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"CACHE_GROUPS" => "N",	// Учитывать права доступа
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_TYPE" => "A",	// Тип кеширования
							"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
							"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
							"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
							"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
							"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
							"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
							"IBLOCK_ID" => "1",	// Инфоблок
							"IBLOCK_TYPE" => "content",	// Тип инфоблока
							"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
							"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
							"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
							"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
							"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
							"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
							"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
							"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
							"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
							"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
							"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
							"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
							"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
							"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
							"PAGER_TITLE" => "Товары",	// Название категорий
							"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
							"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
							"PRICE_CODE" => "",	// Тип цены
							"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
							"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
							"PRODUCT_PROPERTIES" => "",	// Характеристики товара
							"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
							"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
							"PROPERTY_CODE" => array(	// Свойства
								0 => "",
								1 => "",
							),
							"SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
							"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
							"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
							"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
							"SECTION_USER_FIELDS" => array(	// Свойства раздела
								0 => "UF_SPECIALISTS",
								1 => "",
							),
							"SEF_MODE" => "N",	// Включить поддержку ЧПУ
							"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
							"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
							"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
							"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
							"SET_STATUS_404" => "N",	// Устанавливать статус 404
							"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
							"SHOW_404" => "N",	// Показ специальной страницы
							"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
							"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
							"TEMPLATE_THEME" => "blue",	// Цветовая тема
							"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
							"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
							"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
						),
						false
					);?>
				<? endif; ?>
				<a class="with-arrow" href="/price/">Прайс-лист на услуги COSMODENT</a>
			</div>
		</div>
		<div class="right service-accord-cont stick">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"services_right",
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
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "1",
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
</div>
<? if( isset($GLOBALS["SPECIALISTS"]) && is_array($GLOBALS["SPECIALISTS"]) && count($GLOBALS["SPECIALISTS"]) ): ?>
	<? $GLOBALS["specFilter"] = array("ID" => $GLOBALS["SPECIALISTS"]); 
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"doctors_bottom",
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
			"FILTER_NAME" => "specFilter",
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
			"SORT_ORDER2" => "ASC",
			"CUSTOM_TITLE" => "Лечащие врачи",
		)
	);?>
<? endif; ?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
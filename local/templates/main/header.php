<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
// $wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID);
CJSCore::Init(array("fx"));

getSource();

$curPage = $APPLICATION->GetCurPage();
$urlArr = explode("/", $curPage);
$GLOBALS["isMain"] = $isMain = ( $curPage == "/" )?true:false;
$page = $GLOBALS["page"] = ( $urlArr[2] == null || $urlArr[2] == "" )?$urlArr[1]:$urlArr[2];
$subPage = $urlArr[2];
$GLOBALS["version"] = 9;

$is404 = defined('ERROR_404') && ERROR_404=='Y' && !defined('ADMIN_SECTION');

$arPage = ( isset($arPages[$urlArr[2]]) )?$arPages[$urlArr[2]]:$arPages[$urlArr[1]];

$notBText = $GLOBALS["notBText"] = (in_array($page, array("reviews", "about", "questions", "services", "doctors", "actions", "works", "search", "contacts")))?true: false;

$GLOBALS["depends"] = array(
	"contacts" => array(
		"js" => array(
			"//maps.google.com/maps/api/js?sensor=false&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI",
		)
	),
);

?><!DOCTYPE html>
<html>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/slick.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/slick-theme.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/jquery-ui.theme.min.css" type="text/css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/html/css/layout.css" type="text/css">

	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1199px)" href="<?=SITE_TEMPLATE_PATH?>/html/css/layout-tablet.css">
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="<?=SITE_TEMPLATE_PATH?>/html/css/layout-mobile.css">

	<meta property="og:url" content="">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
    <meta property="og:description" content="<?$APPLICATION->ShowProperty("description")?>">
    <meta property="og:image" content="http://<?=$_SERVER["HTTP_HOST"]?><?=SITE_TEMPLATE_PATH?>/html/i/vk.jpg">
    <meta property="twitter:image" content="http://<?=$_SERVER["HTTP_HOST"]?><?=SITE_TEMPLATE_PATH?>/html/i/vk.jpg">
    <link rel="image_src" href="http://<?=$_SERVER["HTTP_HOST"]?><?=SITE_TEMPLATE_PATH?>/html/i/vk.jpg">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/html/favicon/favicon-128.png" sizes="128x128" />
	<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/html/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?=SITE_TEMPLATE_PATH?>/html/favicon/mstile-70x70.png" />

	<?$APPLICATION->ShowHead();?>
</head>
<body class="<?=( ($isMain)?"main":"inner" )?>">
	<?$APPLICATION->ShowPanel();?>
	<div id="mobile-menu" class="mobile-menu slideout-menu slideout-menu-left">
		<h2 class="slideout-menu-padding">Меню</h2>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
			"COMPONENT_TEMPLATE" => ".default",
				"ROOT_MENU_TYPE" => "mobile",	// Тип меню для первого уровня
				"MENU_CACHE_TYPE" => "N",	// Тип кеширования
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
				"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
					0 => "",
				),
				"MAX_LEVEL" => "1",	// Уровень вложенности меню
				"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			),
			false
		);?>
		<div class="slideout-menu-padding">
			<a href="#b-popup-register" class="fancy b-btn b-btn-red">Записаться на прием</a>
		</div>
	</div>
	<div id="panel-page" class="panel-page slideout-panel">
		<div class="b-header">
			<div class="b b-top clearfix">
				<div class="b-block">
					<div class="b-top-list">
						<div class="b-timetable-mobile">
							<div class="content"><?=includeArea("time")?></div>
						</div>
						<div class="b-top-item b-address b-address-1">
							<div class="icon-pin"></div>
							<div class="b-top-head"><?=includeArea("addr-1")?></div>
							<?=includeArea("phone-1")?>
							<div class="b-address-timetable"><?=includeArea("time")?></div>
						</div>
						<div class="b-top-item b-address b-address-2">
							<div class="b-top-item-inner">
								<div class="icon-phone"></div>
								<div class="b-top-head"><?=includeArea("addr-2")?></div>
								<?=includeArea("phone-2")?>
								<div class="b-address-timetable"><?=includeArea("time")?></div>
							</div>
						</div>
						<div class="b-top-item b-logo-cont">
							<a href="/" class="b-logo"></a>
						</div>
						<div class="b-top-item b-timetable">
							<div class="icon-clock"></div>
							<div class="b-top-head"><?=includeArea("schedule")?></div>
							<div><?=includeArea("time")?></div>
						</div>
						<div class="b-top-phone-mobile">
							<div class="icon-phone"></div>
							<div class="content">
								<a href="tel:+73822403020">40‒30‒20</a>
								<a href="tel:+73822543334">54‒33‒34</a>
							</div>
						</div>
						<div class="b-top-item">
							<a href="#b-popup-register" class="fancy b-btn b-btn-red">Записаться на прием</a>
						</div>
					</div>
				</div>
			</div>
			<div class="b-menu-cont">
				<div class="b-block">
					<div class="b-menu">
						<a href="#" id="burger-menu" class="burger-menu icon-burger-menu"></a>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
							"COMPONENT_TEMPLATE" => ".default",
								"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
								"MENU_CACHE_TYPE" => "N",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
									0 => "",
								),
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								"CLASS" => "b-menu-list"
							),
							false
						);?>
						<a href="#b-popup-register" class="fancy b-btn b-btn-red">Записаться на прием</a>
					</div>
				</div>
			</div>
			<? if( $isMain ): ?>
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"slider_main",
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
						"IBLOCK_ID" => "13",
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
			<? else: ?>
				<div class="b-header-back" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/html/i/back-inner-spec.jpg);">
					<div class="b-header-content">
						<div class="b-block">
							<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
									"COMPONENT_TEMPLATE" => ".default",
									"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
									"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
								),
								false
							);?>
							<h1 class="b-title"><?$APPLICATION->ShowTitle(false)?></h1>
						</div>
					</div>
					<div class="b-header-back-white"></div>
				</div>
			<? endif; ?>
		</div>
		<div class="b-content">
			<? if( !$isMain ): ?>
				<div class="b-block">
			<? endif; ?>
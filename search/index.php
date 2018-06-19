<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "поиск cosmodent");
$APPLICATION->SetPageProperty("description", "Поиск по сайту авторской клиники COSMODENT");
$APPLICATION->SetTitle("Поиск по сайту");?>
<? if( !isset($_GET["partial"]) ): ?>
<div class="b-other-content b-search-content">
	<div class="b-block clearfix">
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.form",
			"search",
			Array(
				"PAGE" => "/search/",
				"USE_SUGGEST" => "N"
			)
		);?>
		<ul class="right search-filter">
			<?
				$sections = array(
					array("NAME" => "Все разделы"),
					array("ID" => "1", "NAME" => "Услуги"),
					array("ID" => "2", "NAME" => "Врачи"),
					array("ID" => "5", "NAME" => "Акции"),
					array("ID" => "3", "NAME" => "Статьи"),
				);

				$arrFilter = array();
				foreach ($sections as $arSection)
					if( !isset($_GET["i"]) || $arSection["ID"] == $_GET["i"] ) 
						array_push($arrFilter, $arSection["ID"]);

				foreach ($sections as $arSection):
			?>
			<li<?if( (!isset($_GET["i"]) && $arSection["NAME"] == "Все разделы") || (isset($_GET["i"]) && isset($arSection["ID"]) && $_GET["i"] == $arSection["ID"]) ):?> class="active"<?endif;?>><a href="/search/?q=<?=( (isset($_GET["q"]))?$_GET["q"]:"" )?><?if(isset($arSection["ID"])):?>&i=<?=$arSection["ID"]?><?endif;?>"><?=$arSection["NAME"]?></a></li>
			<? endforeach; ?>
		</ul>
	</div>
</div>
<div class="b-other-content b-grey">
	<div class="b-block">
		<h2 class="title">Результаты поиска</h2>
<? endif; ?> 
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.page",
			"search",
			Array(
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"CACHE_TIME" => "3600",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "N",
				"DEFAULT_SORT" => "rank",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_TOP_PAGER" => "Y",
				"FILTER_NAME" => "",
				"NO_WORD_LOGIC" => "N",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_TEMPLATE" => "",
				"PAGER_TITLE" => "Результаты поиска",
				"PAGE_RESULT_COUNT" => "10",
				"PATH_TO_USER_PROFILE" => "",
				"RATING_TYPE" => "",
				"RESTART" => "N",
				"SHOW_RATING" => "",
				"SHOW_WHEN" => "N",
				"SHOW_WHERE" => "Y",
				"USE_LANGUAGE_GUESS" => "Y",
				"USE_SUGGEST" => "N",
				"USE_TITLE_RANK" => "N",
				"arrFILTER" => array("iblock_content"),
				"arrFILTER_iblock_content" => $arrFilter,
				"arrWHERE" => array("iblock_content")
			)
		);?>
<? if( !isset($_GET["partial"]) ): ?>
	</div>
</div>
<? endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
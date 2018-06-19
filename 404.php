<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");

?>
<div class="b-content b-404-content">
	<div class="b-block">
		<h1 class="title">Страница не найдена</h1>
	</div>
</div>
<div class="b-other-content b-search-content b-not-found">
	<div class="b-block clearfix">
		<div class="b-text">
			<p>Страницы, которую Вы запрашиваете, не существует.<br>Возможно она была удалена или Вы неправильно ввели адрес.</p>
			<p>Попробуйте воспользоваться поиском</p>
		</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.form",
			"search",
			Array(
				"PAGE" => "/search/",
				"USE_SUGGEST" => "N"
			)
		);?>
	</div>
</div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
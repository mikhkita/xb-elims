<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<?

global $APPLICATION;
$APPLICATION->RestartBuffer();

$USER->Logout();

?>

<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?>

<?
die();
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
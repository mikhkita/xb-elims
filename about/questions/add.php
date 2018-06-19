<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?><?

$filterTags = array(
	"http://128.fo.ru",
	"КЛИЕНТСКИЕ БАЗЫ",
	"prodawez392@gmail.com",
);
$spam = false;
foreach ($_POST as $i => $value)
	foreach ($filterTags as $j => $tag)
		if( mb_strpos($value, $tag, 0, "UTF-8") !== false )
			$spam = true;

if( (isset($_POST["MAIL"]) && $_POST["MAIL"] != "") || $spam ){
	$data = array(
		"DATA" => implode(PHP_EOL, array_map(function($k, $v) { return "$k: $v"; }, array_keys($_POST), $_POST))
	);
	if( CEvent::Send("SPAM", "s1", $data) ){
		echo "1";
	}else{
		echo "0";
	}
}else{
	CModule::IncludeModule("iblock");

	$rsUser = CUser::GetByID($USER->GetID());
	$arUser = $rsUser->Fetch();

	$el = new CIBlockElement;

	if( $_POST["name"] == NULL || $_POST["name"] == "" || !isset($_POST["name"]) )
		$_POST["name"] = "Аноним";

	$PROP = array();
	$PROP[15] = $_POST["name"];
	$PROP[16] = $_POST["email"];
	$PROP[17] = date("d.m.Y");

	$arLoadProductArray = Array(
	  "MODIFIED_BY"    => $USER->GetID(),
	  "IBLOCK_SECTION_ID" => false,
	  "IBLOCK_ID"      => 10,
	  "PROPERTY_VALUES"=> $PROP,
	  "NAME"           => $_POST["name"]." ".date("d.m.Y"),
	  "ACTIVE"         => "N",
	  "PREVIEW_TEXT"   => $_POST["text"]
	);

	if($PRODUCT_ID = $el->Add($arLoadProductArray)){
		$arEventFields = array(
			"NAME"				=> $_POST["name"],
			"EMAIL"				=> $_POST["email"],
			"TEXT"				=> $_POST["text"],
			"DETAIL_LINK"		=> "http://cosmodent.su/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=10&type=content&ID=".$PRODUCT_ID."&lang=ru&find_section_section=0&WF=Y",
		);
		CEvent::Send("NEW_QUESTION", "s1", $arEventFields);
		echo "1";
	}else{
		echo "0";
	}
}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
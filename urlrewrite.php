<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/services/(.+)/(.+)/(\\\\?(.*))?#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2",
		"ID" => "",
		"PATH" => "/services/detail.php",
	),
	array(
		"CONDITION" => "#^/about/works/(.+)/(\\\\?(.*))?#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/about/works/detail.php",
	),
	array(
		"CONDITION" => "#^/price-list/(.+)/(\\\\?(.*))?#",
		"RULE" => "PARENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/price-list/section.php",
	),
	array(
		"CONDITION" => "#^/articles/(.+)/(\\\\?(.*))?#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/articles/detail.php",
	),
	array(
		"CONDITION" => "#^/doctors/(.+)/(\\\\?(.*))?#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/doctors/detail.php",
	),
	array(
		"CONDITION" => "#^/actions/(.+)/(\\\\?(.*))?#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/actions/detail.php",
	),
	array(
		"CONDITION" => "#^/news/(.+)/(\\\\?(.*))?#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/news/detail.php",
	),
);

?>
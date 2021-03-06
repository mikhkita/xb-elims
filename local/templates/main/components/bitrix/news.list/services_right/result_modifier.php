<?

$sections = array();

$allItems = array();
foreach ($arResult["ITEMS"] as $i => $arItem) {
	$allItems[$arItem["ID"]] = $arItem;
}

$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>1, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => $GLOBALS["SECTION_ID"]), false, array("UF_CLASS", "UF_DOP") );
while($arItem = $items->GetNext()){
    $arItem["ITEMS"] = array();
    $subItems = CIBlockSection::GetMixedList(array("sort"=>"asc"), array('IBLOCK_ID'=>1, 'SECTION_ID' => $arItem["ID"]), false, array("ID") );
    while($subItem = $subItems->GetNext())
    	array_push($arItem["ITEMS"], $allItems[$subItem["ID"]]);

    $sections[$arItem['ID']] = $arItem;
}


$arResult["SECTIONS"] = $sections;
unset($arResult["ITEMS"]);

?>
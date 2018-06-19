<?

$sections = array();

$servSections = array();

$items = CIBlockSection::GetList(array("sort"=>"asc"), array('IBLOCK_ID'=>7, 'GLOBAL_ACTIVE'=>'Y'), false, array("UF_SECTION") );
while($arItem = $items->GetNext()){
    $arItem["ITEMS"] = array();
    $sections[$arItem['ID']] = $arItem;
}

foreach ($arResult["ITEMS"] as $i => $arItem) {
    array_push($sections[ $arItem["IBLOCK_SECTION_ID"] ]["ITEMS"], $arItem);
}

$arResult["SECTIONS"] = $sections;
unset($arResult["ITEMS"]);

?>
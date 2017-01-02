<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "Data/DatabaseConnection.php";
$keywordArray = explode(" ",$_GET['keyword']);
$categoryId = $_GET['category'];
$keywordString = "";
for($i = 0; $i < count($keywordArray); $i++){
    $keywordString.=$keywordArray[$i];
    if($i !== count($keywordArray) - 1)
        $keywordString.="|";
}
$products = [];
if($categoryId == 0) {
    $products = $database->select("products", "*", [
        "product_description[REGEXP]" => $keywordString
    ]);
}
else if($keywordString == "") {
    $products = $database->select("products", "*", [
        "product_category_id" => $categoryId
    ]);
}
else {
    $products = $database->select("products", "*", [
        "AND" =>[
            "product_description[REGEXP]" => $keywordString,
            "product_category_id" => $categoryId
        ]
    ]);
}
?>
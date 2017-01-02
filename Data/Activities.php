<?php
include_once "DatabaseConnection.php";
$options = $database->select("activities",[
    "ID",
    "name"
]);
foreach ($options as $option){
    if(isset($_GET["selected"])){
        if($option["ID"] == $_GET["selected"]){
            echo '<option value="' . $option["ID"] . '" selected>' . $option["name"] . '</option>';
        }
        else
            echo '<option value="' . $option["ID"] . '">' . $option["name"] . '</option>';
    }
    else
        echo '<option value="' . $option["ID"] . '">' . $option["name"] . '</option>';
}
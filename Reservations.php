<?php

include "Data/DatabaseConnection.php";

$array = $database->select("activities","name");

foreach($array as $i) {
    echo $array["name"];
}

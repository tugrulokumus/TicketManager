<?php

include "library/medoo.php";

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'ticket_management',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '*uguristan1*',
    'charset' => 'utf-8'
]);
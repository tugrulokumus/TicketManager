<?php
include_once "Data/DatabaseConnection.php";
$new_user = $_GET["reg_username"];
$new_password = $_GET["reg_password"];

$database->insert("users",[
        "UserName" => $new_user,
        "Password" => $new_password
]);
?>
<script>
    window.location.href = "index.php";
</script>
<?php
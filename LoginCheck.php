<?php
include_once "Data/DatabaseConnection.php";
$user = $_POST["username"];
$password = md5($_POST["password"]);
$login_check = $database->query('SELECT count(*) FROM users WHERE UserName = ' ."$user". ' AND Password = ' ."$password");
if($login_check === 1) {
    session_start();
    $_SESSION["id"] = 1;
    ?>
    <script>
        window.location.href = "AccountPage.php";
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}






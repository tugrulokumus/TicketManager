<!DOCTYPE HTML>
<html>
<head>
    <?php include "Head.php"; ?>
    <title>Ticket Manager</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-left: 10px">
        <br>
            <div class="col-sm-5">
                <h1>Ticket Manager</h1>
                <br>
                <form method="post" action="LoginCheck.php">
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" id="username">
                    <br>
                    <label for="password">Password: </label>
                    <input type="text" class="form-control" name="password" id="password">
                    <br>
                    <button class="btn btn-default btn-lg" name="login">Login</button>
                    <button class="btn btn-default btn-lg" name="Register" style="margin-left: 10px;">Register</button>
                </form>
            </div>
        </div>
    </div>
<?php

?>


</body>

</html>

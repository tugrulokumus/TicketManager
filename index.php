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
                    <input type="password" class="form-control" name="password" id="password">
                    <br>
                    <button class="btn btn-default btn-lg" type="submit" name="login">Login</button>
                    <label></label>
                </form><br>
                <button class="btn btn-default btn-lg" onclick="location.href='Register.php'">Register</button>
            </div>
        </div>
    </div>
</body>

</html>

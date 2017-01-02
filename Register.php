<!DOCTYPE HTML>
<html>
<head>
    <?php include "Head.php"; ?>
    <title>Register</title>
</head>
<body>
<div class="container-fluid">
    <div class="row" style="margin-left: 10px">
        <br>
        <div class="col-sm-5">
            <h1>Register</h1>
            <br>
            <form method="get" action="Registration.php">
                <label for="reg_username">Username: </label>
                <input type="text" class="form-control" name="reg_username">
                <br>
                <label for="reg_pswd">Password: </label>
                <input type="password" class="form-control" name="reg_password">
                <br>
                <button class="btn btn-info btn-lg" onclick="location.href='Register.php'">Register</button>
            </form>
        </div>
    </div>
</div>
</body>
<html>
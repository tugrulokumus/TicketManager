<!DOCTYPE HTML>
<?php include "Data/DatabaseConnection.php"; ?>
<head>
  <?php include "Head.php"?>
</head>

<<body>
    <div class="container-fluid">
        <div class="row" style="margin-left: 10px">
        <br>
            <div class="col-sm-5">
                <h1>Add Reservation</h1>
                <br>
                <form method="post" action="Insert.php">
                    <label for="res_name">Reservation name: </label>
                    <input type="text" class="form-control" name="res_name" id="res_name">
                    <br>
                    <label for="add_password">Password: </label>
                    <input type="password" class="form-control" name="add_password" id="add_password">
                    <br>
                    <button class="btn btn-default btn-lg" type="submit" name="Add">Login</button>
                    <label></label>
                </form><br>
            </div>
        </div>
    </div>
<?php

?>


</body>

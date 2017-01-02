<!DOCTYPE HTML>
<head>
    <?php include "Head.php"; ?>
</head>

<body>
<div class="container-fluid">
    <div class="row" style="margin-left: 10px">
        <br>
        <div class="col-sm-5">
            <h1>Welcome</h1>
            <br>
            <form method="post" action="LoginCheck.php">
                <label for="date_start">Date start: </label>
                <input type="date" class="form-control" style="width:30%;" name="date_start" id="date_start">
                <br>
                <label for="date_end">Date end: </label>
                <br>
                <input type="date" class="form-control" style="width:30%;" name="date_end" id="date_end">
                <br>
                <label for="type">Type: </label>
                <select class="form-control" style="width:30%;" name="type" id="type">
                    <option value="0">Select activity type</option>
                    <?php include "Data/Types.php"?>
                </select>
                <br>
                <label for="cities">Cities: </label>
                <select class="form-control" style="width:30%;" name="cities" id="cities">
                    <option value="0">Select city</option>
                    <?php include "Data/Cities.php"?>
                </select>
                <br>
                <label for="showroom">Showroom: </label>
                <select class="form-control" style="width:30%;" name="showroom" id="showroom">
                    <option value="0">Select showroom</option>
                    <?php include "Data/Showrooms.php"?>
                </select>
                <br>
                <button class="btn btn-default btn-lg" type="submit" name="search">
                    <i class="glyphicon glyphicon-search"> Search</i>
                </button>
            </form><br>
            <button class="btn btn-info btn-lg" onclick="location.href='Reservations.php'">View</button>
            <br><br>
            <button class="btn btn-info btn-lg"><i class="glyphicon glyphicon-plus">Add</i></button>
        </div>
    </div>
</div>
</body>
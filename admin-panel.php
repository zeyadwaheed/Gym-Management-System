<?php

$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'loginsystem'
];


$conn = mysqli_connect($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);


$query = "SELECT * FROM `Trainer`";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SSP Gym</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <div class="jumbotron" style="border-radius:0;background:url('images/download.jpg');background: size 500px;px;height: 600px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#ff9;color:black;">Members options</a>
                        <a href="trainer_details.php" class="list-group-item" style="background-color:#ff9;color:black;">Check Member details</a>
                        <a href="package.php" class="list-group-item" style="background-color:#ff9;color:black;">View Package details</a>
                        <a href="payment.php" class="list-group-item" style="background-color:#ff9;color:black;">Payments</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="trainer.php" class="list-group-item active" style="background-color:#ff9;color:black;">Trainer details/Add new Trainer</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body" style="background-color:#ff9;color:FFFFFF;">
                            <h3>New members registration</h3>
                        </div> 
                        <div class="card-body"></div>
                        <form class="form-group" action="func.php" method="post">
                            <label>First Name:</label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label>Last Name:</label>
                            <input type="text" name="lname" class="form-control"><br> 
                            <label>ID</label>
                            <input type="text" name="contact" class="form-control"><br>    
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"><br>    
                            <label>Choose a trainer </label> 
                            <select class="form-control" name="trainer">
                                <?php while($row = mysqli_fetch_array($result)): ?>
                                    <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary" style="background-color:#ff9;color:black;" name="pat_submit" value="Register">
                        </form>
                        <a href="index.php" class="btn btn-light" style="background-color:#ff9;color:black">Logout</a>
                    </div

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>GET_POST</title>
</head>
<body>

<?php

include 'con.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_name = $_POST['task'];


    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        $qry = "INSERT INTO `todo` (`TASK`) VALUES ('$task_name')";
        $res = mysqli_query($conn, $qry);
        if ($res) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hello</strong> Your task has been added. 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hello</strong> Sorry! your task cant be added due to some technical issue. 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }   
}
?>

<div class="container">
    <form class="mt-3" action="/todoapps/insert.php" method="post">
    <div class="mb-3">
        <label for="task" class="form-label">Write in box</label>
        <textarea name="task" class="form-control" id="task" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    <button onclick="location.href='todoapp.php'" type="submit" class="btn btn-primary mt-3">Click here view your Tasks</button>
</div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
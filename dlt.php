<!DOCTYPE html>
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
$SNO = $_GET['SNO'];
$res = mysqli_query($conn,"DELETE FROM `todo` WHERE `todo`.`SNO` = $SNO");
if ($res) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hello</strong> DELETED SUCCESSFULLY. 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Hello</strong> Sorry! your task cant be deleted due to some technical issue. 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="container">
    <button onclick="location.href='todoapp.php'" type="submit" class="btn btn-primary mt-3">Click here view your Tasks</button>
</div>
</body>
</html>
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




<div class="container">
    <form class="mt-3" method="POST">
    <div class="mb-3">
        <label for="task" class="form-label">Write in box</label>
        <?php
include 'con.php';
$SNO = $_GET['SNO'];
$qry = "SELECT * FROM `todo`";
$res = mysqli_query($conn, $qry);
echo "<textarea name='task' class='form-control' id='task' cols='30' rows='10'>";
while($row = mysqli_fetch_assoc($res)) {
  echo $row['TASK'];
  
}
echo "</textarea>";


if (isset($_POST['done'])) {
    $task_name = $_POST['task'];

    mysqli_query($conn,"UPDATE `todo` SET `TASK` = '$task_name' WHERE `todo`.`SNO` = $SNO");

    header('location:todoapp.php');
    
}



?>
    </div>
    <button type="submit" class="btn btn-primary mt-3" name="done">Click here view your Tasks</button>
    </form>
    
</div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
        
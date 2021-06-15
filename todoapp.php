<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/metropolis" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Document</title>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  </svg>
</head>
<body>
<p class="time">Work On Time!!</p>
<div class="main_div">
<p class="tasks">Task to be done</p>
<div class="hey">
<style><?php include 'style.css'; ?></style>

<?php

include 'con.php';

$qry = "SELECT * FROM `todo`";
$res = mysqli_query($conn, $qry);
echo "<table cellspacing=0px cellpadding=12px width=100% >";
if (mysqli_num_rows($res) == 0) {
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hello</strong> Your task list is empty click below to add task. 
</div>';
} else {
while($row = mysqli_fetch_assoc($res)) {
  ?>
  <tr>
  <td width=70%>
  <?php 
  echo $row['TASK'];
  ?>  
  </td>
  <td>
  <button class="btn btn-danger">
  <a href="dlt.php?SNO=<?php echo $row['SNO']; ?>" class="text-white"> DELETE</a>
  </button>
  </td>
  <td>
  <button class="btn btn-success">
  <a href="updt.php?SNO=<?php echo $row['SNO']; ?>" class="text-white"> UPDATE</a>
  </button>
  </td>
  </tr>
  <?php
}
echo "</table>";
}
?>

</div>
<button onclick="location.href='insert.php'" type="button" class="btn btn-primary">ADD A TASK</button>
</div>
</body>
</html>


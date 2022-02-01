<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="showdatastyling.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="table-responsive">


<a href="logout.php">
    <button>Logout</button>
</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>ID</th>

<th>Name Of User</th>


<th>Content</th>
<!-- 
<th>Product Details</th> -->

</tr>

</thead>

<tfoot>

<tr>

<th>ID</th>

<th>Name of user</th>


<th>Content</th>

<!-- <th>Product Details</th> -->

</tr>

</tfoot>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "login";


// include 'config.php';

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from diary_db';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['id']; ?>

</th>

<td>

<?php echo $row['username']; ?>

</td>

<!-- <td>

<?php echo $row['date']; ?>

</td> -->

<td>

<?php echo $row['content']; ?>

</td>

<!-- <td>

echo $row['product_details']; 

</td> -->

</tr>

</tbody>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>
</body>
</html>
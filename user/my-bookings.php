<?php
session_start();
include('../includes/config.php');

if(!isset($_SESSION['user_id']))
{
    header("Location:../login.php");
}

$user_id=$_SESSION['user_id'];

$result=mysqli_query(
$conn,
"SELECT bookings.*, cars.car_name
FROM bookings
INNER JOIN cars
ON bookings.car_id=cars.id
WHERE bookings.user_id='$user_id'"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Bookings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<h2>My Bookings</h2>

<table class="table table-bordered">

<tr>
<th>Car</th>
<th>Pickup Date</th>
<th>Return Date</th>
<th>Total Amount</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['car_name']; ?></td>
<td><?php echo $row['pickup_date']; ?></td>
<td><?php echo $row['return_date']; ?></td>
<td>₹<?php echo $row['total_amount']; ?></td>
</tr>

<?php
}
?>

</table>

<a href="profile.php" class="btn btn-primary">
Back
</a>

</div>

</body>
</html>
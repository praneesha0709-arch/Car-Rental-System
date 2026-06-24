<?php
include('../includes/config.php');

$cars=mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM cars")
);

$users=mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM users")
);

$bookings=mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM bookings")
);

?>

<h2>Admin Dashboard</h2>

<p>Total Cars: <?php echo $cars; ?></p>
<p>Total Users: <?php echo $users; ?></p>
<p>Total Bookings: <?php echo $bookings; ?></p>
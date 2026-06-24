<?php
session_start();

if(!isset($_SESSION['user_id']))
{
header("Location:../login.php");
}
?>

<h2>Welcome User</h2>

<a href="my-bookings.php">
My Bookings
</a>
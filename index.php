<?php
include('includes/config.php');
include('includes/header.php');
?>

<h2>Available Cars</h2>

<table class="table table-bordered">

<tr>
<th>Car</th>
<th>Brand</th>
<th>Rent/Day</th>
</tr>

<?php

$result=mysqli_query(
$conn,
"SELECT * FROM cars"
);

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td>
<?php echo $row['car_name'];?>
</td>

<td>
<?php echo $row['brand'];?>
</td>

<td>
₹<?php echo $row['rent_per_day'];?>
</td>

</tr>

<?php
}
?>

</table>

<a href="registration.php"
class="btn btn-success">
Register
</a>

<a href="login.php"
class="btn btn-primary">
Login
</a>

<?php
include('includes/footer.php');
?>
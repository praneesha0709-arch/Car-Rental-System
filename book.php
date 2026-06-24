<?php

session_start();

include('includes/config.php');

if(!isset($_SESSION['user_id']))
{
header("Location:login.php");
}

if(isset($_POST['book']))
{

$user_id=$_SESSION['user_id'];

$car_id=$_POST['car_id'];

$pickup=$_POST['pickup'];

$return=$_POST['return'];

$days=
(
strtotime($return)
-
strtotime($pickup)
)
/86400;

$car=mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT * FROM cars
WHERE id=$car_id"
)
);

$total=
$days*
$car['rent_per_day'];

mysqli_query(
$conn,
"INSERT INTO bookings
(user_id,car_id,pickup_date,return_date,total_amount)
VALUES
('$user_id','$car_id','$pickup','$return','$total')"
);

echo "Booking Successful";
echo "<br>Total Amount: ₹".$total;
}
?>

<form method="POST">

Car:

<select name="car_id">

<?php

$result=mysqli_query(
$conn,
"SELECT * FROM cars"
);

while($row=mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo $row['id']; ?>">
<?php echo $row['car_name']; ?>
</option>

<?php
}
?>

</select>

<br><br>

Pickup Date:

<input type="date" name="pickup">

<br><br>

Return Date:

<input type="date" name="return">

<br><br>

<input
type="submit"
name="book"
value="Book Car">

</form>
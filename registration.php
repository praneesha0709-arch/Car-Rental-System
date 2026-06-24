<?php
include('includes/config.php');

if(isset($_POST['register']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=md5($_POST['password']);

mysqli_query(
$conn,
"INSERT INTO users
(name,email,phone,password)
VALUES
('$name','$email','$phone','$password')"
);

echo "Registration Successful";
}
?>

<form method="POST">

<input
type="text"
name="name"
placeholder="Name"
class="form-control">

<br>

<input
type="email"
name="email"
placeholder="Email"
class="form-control">

<br>

<input
type="text"
name="phone"
placeholder="Phone"
class="form-control">

<br>

<input
type="password"
name="password"
placeholder="Password"
class="form-control">

<br>

<button
name="register"
class="btn btn-success">
Register
</button>

</form>
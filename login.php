<?php

session_start();

include('includes/config.php');

if(isset($_POST['login']))
{

$email=$_POST['email'];
$password=md5($_POST['password']);

$result=mysqli_query(
$conn,
"SELECT * FROM users
WHERE email='$email'
AND password='$password'"
);

if(mysqli_num_rows($result)>0)
{

$user=mysqli_fetch_assoc($result);

$_SESSION['user_id']=$user['id'];

header("Location:user/profile.php");

}

else
{
echo "Invalid Login";
}

}
?>

<form method="POST">

<input
type="email"
name="email"
placeholder="Email"
class="form-control">

<br>

<input
type="password"
name="password"
placeholder="Password"
class="form-control">

<br>

<button
name="login"
class="btn btn-primary">
Login
</button>

</form>
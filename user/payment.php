<?php
session_start();

if(!isset($_SESSION['user_id']))
{
header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Payment Page</h2>

<form>

<div class="mb-3">

<label>
Card Number
</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>
Card Holder Name
</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>
CVV
</label>

<input
type="password"
class="form-control">

</div>

<button
type="submit"
class="btn btn-success">

Pay Now

</button>

</form>

</div>

</body>
</html>
<?php

function calculateRent(
$rentPerDay,
$pickupDate,
$returnDate
)
{

$days=
(
strtotime($returnDate)
-
strtotime($pickupDate)
)
/86400;

if($days<=0)
{
$days=1;
}

return $days*$rentPerDay;
}


function isLoggedIn()
{

if(isset($_SESSION['user_id']))
{
return true;
}

return false;

}

?>
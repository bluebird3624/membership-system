<?php

$today = strtotime('today');
$expiarydate = strtotime('tomorrow');

echo $expiarydate.'</br>';

echo date("Y-d-m",$today);

if($today >= $expiarydate){
    //expired revoke access
    echo "Your subscription has expired";
}else{
    //log user in
    echo "Your subscription is still valid";
}
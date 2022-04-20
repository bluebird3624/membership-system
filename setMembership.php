<?php
//get user data from session and create db data

$validity = "+1 month";

$startdate = strtotime("today");

$enddate = strtotime($validity, $startdate);

echo $enddate;






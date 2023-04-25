<?php
header("Access-Control-Allow-Origin: *");
include "./dbcon.php";
$techarray = array();
$sql = "SELECT * FROM `present`";

$result = mysqli_query($con, $sql);

//create an array

while ($row = mysqli_fetch_assoc($result)) {
    $techarray[] = $row;
}


// $result_array = array('data' => $techarray);
echo json_encode($techarray);
?>
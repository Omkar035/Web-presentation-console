<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selfserve";
// $servername = "localhost";
// $username = "publishe_webpresent";
// $password = "HCwebpresent";
// $dbname = "publishe_webpresentation"; 
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
// else{
//     echo "success";
// }

?>
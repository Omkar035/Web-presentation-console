<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
// else{
//     echo "success";
// }

?>
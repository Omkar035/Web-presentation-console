<?php
session_start();
include "db_con.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location:index.php?error=email is required");
        exit();
    } else if (empty($password)) {
        header("Location:index.php?error=password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location:home.php");
                exit();
            } else {
                header("Location:index.php?error=Incorrect Email or Password");
                exit();
            }

        } else {
            header("Location:index.php?error=Incorrect Email or Password");
            exit();
        }
    }

} else {
    header("Location:index.php?error");
    exit();
}

?>
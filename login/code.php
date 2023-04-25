<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_data'])) {
    $presentation_id = mysqli_real_escape_string($con, $_POST['delete_data']);

    $query = "DELETE FROM present WHERE id='$presentation_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location:index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Data Not Deleted !...";
        header("Location:index.php");
        exit(0);
    }
}

if (isset($_POST['update_data'])) {
    $presentation_id = mysqli_real_escape_string($con, $_POST['presentation_id']);
    $ad_format = mysqli_real_escape_string($con, $_POST['ad_format']);
    $template = mysqli_real_escape_string($con, $_POST['template']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $average_ctr = mysqli_real_escape_string($con, $_POST['average_ctr']);
    $dimensions = mysqli_real_escape_string($con, $_POST['dimensions']);
    $duration = mysqli_real_escape_string($con, $_POST['duration']);
    $functionality = mysqli_real_escape_string($con, $_POST['functionality']);
    $reviews = mysqli_real_escape_string($con, $_POST['reviews']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $demo_link = mysqli_real_escape_string($con, $_POST['demo_link']);
    $meta_keywords = mysqli_real_escape_string($con, $_POST['meta_keywords']);

    $query = "UPDATE present SET ad_format='$ad_format',template='$template',category='$category',average_ctr='$average_ctr',dimensions='$dimensions',duration='$duration',functionality='$functionality',reviews='$reviews',description='$description',demo_link='$demo_link',meta_keywords='$meta_keywords' WHERE id='$presentation_id' ";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Presentation Data Updated Successfully";
        header("Location:index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Presentation Data Not Updated !..";
        header("Location:index.php");
        exit(0);
    }
}

if (isset($_POST['save_data'])) {
    $ad_format = mysqli_real_escape_string($con, $_POST['ad_format']);
    $template = mysqli_real_escape_string($con, $_POST['template']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $average_ctr = mysqli_real_escape_string($con, $_POST['average_ctr']);
    $dimensions = mysqli_real_escape_string($con, $_POST['dimensions']);
    $duration = mysqli_real_escape_string($con, $_POST['duration']);
    $functionality = mysqli_real_escape_string($con, $_POST['functionality']);
    $reviews = mysqli_real_escape_string($con, $_POST['reviews']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $demo_link = mysqli_real_escape_string($con, $_POST['demo_link']);
    $meta_keywords = mysqli_real_escape_string($con, $_POST['meta_keywords']);

    $query = "INSERT INTO present (ad_format,template,category,average_ctr,dimensions,duration,functionality,reviews,description,demo_link,meta_keywords)  VALUES ('$ad_format','$template','$category','$average_ctr','$dimensions','$duration','$functionality','$reviews','$description','$demo_link','$meta_keywords')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Presentation Data Created Successfully";
        header("Location:presentation_create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Presentation Data Not Created";
        header("Location:presentation_create.php");
        exit(0);
    }

}
?>
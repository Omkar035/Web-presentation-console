<?php
session_start();
require 'dbcon.php';
?>

<?php require('header.php'); ?>
<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DATA UPDATE
                        <a href="index.php"" class=" btn btn-primary float-end">BACK</a>

                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $presentation_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM present WHERE id='$presentation_id' ";
                        $query_run = mysqli_query($con, $query);
                        // print_r($presentation_id);
                    
                        if (mysqli_num_rows($query_run) > 0) {
                            $presentation = mysqli_fetch_array($query_run);
                            // print_r($presentation);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="presentation_id" value="<?= $presentation['id']; ?>">

                                <div class="mb-3">
                                    <label for="ad_format">Ad format:</label>
                                    <input type="text" name="ad_format" value="<?= $presentation['ad_format'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="template">Template:</label>
                                    <input type="text" name="template" value="<?= $presentation['template'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="category">Category:</label>
                                    <input type="text" name="category" value="<?= $presentation['category'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="average_ctr">Average CTR:</label>
                                    <input type="text" name="average_ctr" value="<?= $presentation['average_ctr'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="dimensions">Dimensions:</label>
                                    <input type="text" name="dimensions" value="<?= $presentation['dimensions'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="duration">Duration:</label>
                                    <input type="text" name="duration" value="<?= $presentation['duration'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="functionality">Functionality:</label>
                                    <input type="text" name="functionality" value="<?= $presentation['functionality'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="reviews">Review:</label>
                                    <input type="text" name="reviews" value="<?= $presentation['reviews'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="description">Description:</label>
                                    <input type="text" name="description" value="<?= $presentation['description'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="demo_link">Demo Link:</label>
                                    <input type="text" name="demo_link" value="<?= $presentation['demo_link'] ?>"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keywords">Meta keywords:</label>
                                    <input type="text" name="meta_keywords" value="<?= $presentation['meta_keywords'] ?>"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_data" class="btn btn-danger">
                                        Update Data
                                    </button>
                                </div>
                            </form>
                            <?php
                        } else {
                            echo "<h4>No such Id Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php'); ?>
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
    <?php require('header.php'); ?>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>DATA ADD
                            <a href="home.php"" class=" btn btn-primary float-end">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="ad_format">Ad format:</label>
                                <input type="text" name="ad_format" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="template">Template:</label>
                                <input type="text" name="template" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="category">Category:</label>
                                <input type="text" name="category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="average_ctr">Average CTR:</label>
                                <input type="text" name="average_ctr" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="dimensions">Dimensions:</label>
                                <input type="text" name="dimensions" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="duration">Duration:</label>
                                <input type="text" name="duration" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="functionality">Functionality:</label>
                                <input type="text" name="functionality" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="reviews">Review:</label>
                                <input type="text" name="reviews" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description:</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="demo_link">Demo Link:</label>
                                <input type="text" name="demo_link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords">Meta keywords:</label>
                                <input type="text" name="meta_keywords" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_data" class="btn btn-danger">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location:index.php");
    exit();
}
?>
<?php require('footer.php'); ?>
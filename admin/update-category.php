<?php include "header.php";
if ($_SESSION["user_role"] == '0') {
    header("Location: {$hostname}/admin/post.php");
}

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="adin-heading"> Update Category</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php
                $_POST = $_GET['id'];
                $sql = "SELECT * FROM category WHERE category_id = {$_category_id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    }
                }
                ?>


                ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="cat_id" class="form-control" value="1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cat_name" class="form-control" value="Html" placeholder="" required>
                    </div>
                    <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
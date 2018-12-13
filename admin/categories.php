<?php include "includes/admin_header.php"; ?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">
                        <!-- Insert Categories -->
                        <?php insertCategories(); ?>

                        <form action="categories.php" method="POST">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                            </div>
                        </form>
                        <!--Update and Include Query-->
                        <?php
                        if (isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>

                    </div><!--Add Category Form-->

                    <div class="col-xs-6">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php // Find All Categories Query
                            findCategories()
                            ?>

                            <?php // Delete Query
                            deleteCategories();
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>



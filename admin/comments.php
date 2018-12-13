<?php include "includes/admin_header.php" ?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {
                        case '#';
                            include "includes/#";
                            break;

                        case '#';
                            include "includes/#";
                            break;

                        case '404';
                            echo "error";
                            break;

                        default:
                            include "includes/view_all_comments.php";
                            break;
                    }
                    ?>

                </div>
            </div>

        </div><!-- /.row -->
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>



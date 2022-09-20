<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
<?php   include "includes/nav_bar.php"; ?>

        <div id="page-wrapper">
<?php   include "includes/catagory_content.php"; ?>
<?php 
    // if (isset($_GET['edit'])) {
    //     $cat_id = $_GET['edit'];
    //     include "includes/editCategory";
    // }




?>
    
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php   include "includes/footer.php"; ?>
</body>

</html>

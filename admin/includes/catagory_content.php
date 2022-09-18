<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Category Page
            <small>createing category</small>
        </h1>

        <div class="col-xs-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="category_title">Add Categories</label>
                    <input class= "form-control" type="text" name="cate_nmae" id="">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name= "submit" value="Add Category">
                </div>
            </form>
        </div>
        <!-- Add category Form -->
    <!-- PHP code HERE   \/|\/   PHP code HERE -->
    <!-- PHP code HERE    \|/    PHP code HERE -->
    <!-- PHP code HERE     V     PHP code HERE -->
        <?php 
            $query = "SELECT * FROM categories";
            $queryDbConnection = mysqli_query($connect, $query);
            while ($rowsNo = mysqli_fetch_assoc($queryDbConnection)) {
                $cat_title = $rowsNo['cat_title'];
            }
        ?>

    <!-- PHP code HERE     ^     PHP code HERE -->
    <!-- PHP code HERE    /|\    PHP code HERE -->
    <!-- PHP code HERE   /\|/\   PHP code HERE -->
        <div class="col-xs-6">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            $query = "SELECT * FROM categories";
                            $queryDbConnection = mysqli_query($connect, $query);
                            while ($rowsNo = mysqli_fetch_assoc($queryDbConnection)) {
                                $cat_title =    $rowsNo['cat_title'];
                                $cat_id =       $rowsNo['cat_id'];
                            
                        ?>
                    
                        <td><?php echo $cat_id ?></td>
                        <td><?php echo $cat_title ?></td>

                        <?php } ?>
                    </tr>
                </tbody>
            </table>

        </div>



       
 

        
    </div>
</div>
<!-- /.row -->

</div>
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Category Page
            <small>createing category</small>
        </h1>


        <!-- PHP code HERE   \/|\/   PHP code HERE -->
        <!-- PHP code HERE    \|/    PHP code HERE -->
        <!-- PHP code HERE     V     PHP code HERE -->
            <?php 
                
            // print_r($_GET);
            // print_r($_POST['cat_title']);
                                    // if (isset($_POST['submit2'])) {
                                    //     $id = $_POST['cat_id'];
                                    //     $value = $_POST['cat_title'];
                                        
                                    //     if ($value == "" || empty($value)) {
                                    //         echo "this filed need to be fulled";
                                    //     }else {
                                    //         $query = "UPDATE categories SET cat_title = {'$value'} WHERE id = {'$id'}";
                                    //         $queryDbConnection = mysqli_query($connect, $query);
                                    //         if (!$queryDbConnection ) {
                                    //             die("this Query is not Working..!" . mysqli_error($connect));
                                    //         }
                                    //     }
                                        
                                    // }
            
            
                
            ?>
            
        <!-- PHP code HERE     ^     PHP code HERE -->
        <!-- PHP code HERE    /|\    PHP code HERE -->
        <!-- PHP code HERE   /\|/\   PHP code HERE -->
                           
        <div class="col-xs-6">
            <form action="" method="post" id= "form1">
                <div class="form-group">
                    <label for="category_title">Add Categories</label>
                    <input class= "form-control" type="text" name="cat_title" id="" placeholder = "<?php echo $catTitle ?>">
                    
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name= "submit1" value="Add Category">
                </div>
            </form>
        </div>
        <!-- Add category Form -->

    <!-- PHP code HERE   \/|\/   PHP code HERE -->
    <!-- PHP code HERE    \|/    PHP code HERE -->
    <!-- PHP code HERE     V     PHP code HERE -->
        
    <!-- PHP code HERE     ^     PHP code HERE -->
    <!-- PHP code HERE    /|\    PHP code HERE -->
    <!-- PHP code HERE   /\|/\   PHP code HERE -->
        <div class="col-xs-4">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Title</th>

                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php 
                            $query = "SELECT * FROM categories";
                            $queryDbConnection = mysqli_query($connect, $query);
                            while ($rowsNo = mysqli_fetch_assoc($queryDbConnection)) {
                                $cat_title =    $rowsNo['cat_title'];
                                $cat_id =       $rowsNo['cat_id'];
                            
                        ?>
                        <tr>
                            <td><?php echo $cat_id ?></td>
                            <td><?php echo $cat_title ?></td>
                            
                            <td> <a href="editCategory.php?edit=<?php echo $cat_id ;?>"  name="edit" class= "btn btn-green">Edit</a> </td>
                        </tr>
                        <?php } ?>
                    
                </tbody>
            </table>

        </div>



       
 

        
    </div>
</div>
<!-- /.row -->

</div>
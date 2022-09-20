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
                
            
            if (isset($_POST['submit'])) {
                $value = $_POST['cat_title'];
                
                if ($value == "" || empty($value)) {
                    echo "this filed need to be fulled";
                }else {
                    $query = "INSERT INTO categories (cat_title) VALUES ('{$value}')";
                    $queryDbConnection = mysqli_query($connect, $query);
                    if (!$queryDbConnection ) {
                        die("this Query is not Working..!" . mysqli_error($connect));
                    }
                }
            }
            if(isset($_GET['delete'])){
                $cat_id = $_GET['delete'];
                $query = "DELETE FROM categories WHERE cat_id = {$cat_id}";
                $queryDbConnection = mysqli_query($connect, $query);


            }
                
            ?>
            
        <!-- PHP code HERE     ^     PHP code HERE -->
        <!-- PHP code HERE    /|\    PHP code HERE -->
        <!-- PHP code HERE   /\|/\   PHP code HERE -->
                            <?php    
                               
                            
                            
                            ?>
        <div class="col-xs-6">
            <form action="" method="post" id= "form1">
                <div class="form-group">
                    <label for="category_title">Add Categories</label>
                    <input class= "form-control" type="text" name="cat_title" id="" value = "<?php // print_r($_POST['cat_title']); ?>">

                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name= "submit" value="Add Category">

                </div>
            </form>
        
        <?php 
    if (isset($_GET['edit'])) {
        $cat_id = $_GET['edit'];
        include "editCategory.php";
        }
        ?>
        </div>
        <!-- Add category Form -->

    <!-- PHP code HERE   \/|\/   PHP code HERE -->
    <!-- PHP code HERE    \|/    PHP code HERE -->
    <!-- PHP code HERE     V     PHP code HERE -->
        <?php 
            
            // $query = "SELECT * FROM categories WHERE cat_id = '{$id}'";
            // $queryDbConnection = mysqli_query($connect, $query);
            // while ($rowsNo = mysqli_fetch_assoc($queryDbConnection)) {
            //     $cat_title = $rowsNo['cat_title'];
            // }
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
                        <th>Delete</th>
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
                            <td> <a href="category.php?delete=<?php echo $cat_id ;?>" name="delete" class= "btn btn-danger">Delete</a> </td>
                            <td> <a href="category.php?edit=<?php echo $cat_id ;?>"  name="edit" class= "btn btn-primary">Edit</a> </td>
                        </tr>
                        <?php } ?>
                    
                </tbody>
            </table>

        </div>



       
 

        
    </div>
</div>
<!-- /.row -->

</div>
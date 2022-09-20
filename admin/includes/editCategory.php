


        <!-- PHP code HERE   \/|\/   PHP code HERE -->
        <!-- PHP code HERE    \|/    PHP code HERE -->
        <!-- PHP code HERE     V     PHP code HERE -->
            <?php 
                

            if (isset($_POST['submit1'])) {
                $id = $_GET['edit'];
                $value = $_POST['cat_title'];

                if ($value == "" || empty($value)) {
                    echo "this filed need to be fulled";
                }else {
                    $query = "UPDATE categories SET cat_title = '{$value}' WHERE cat_id = '{$id}'";
                    $queryDbConnection = mysqli_query($connect, $query);
                    if (!$queryDbConnection ) {
                        die("this Query is not Working..!" . mysqli_error($connect));
                    }
                }

            }
            
                
            ?>
            
        <!-- PHP code HERE     ^     PHP code HERE -->
        <!-- PHP code HERE    /|\    PHP code HERE -->
        <!-- PHP code HERE   /\|/\   PHP code HERE -->
                            <?php    
                               
                            
                            // $catTitle = $_GET['catTitle'];
                            // $catTitle = $_POST['cat_title'];
                            // $catId =   $_GET['edit']; 
                            ?>
        
        
            <form action="" method="post" id= "form1">
                <div class="form-group">
                    <label for="category_title">Edit Categories</label>
                    <?php   if (isset($_GET['edit'])) {
                               $id =  $_GET['edit'];
                    
                            $query = "SELECT * FROM categories WHERE cat_id = '{$id}'";
                            $queryDbConnection = mysqli_query($connect, $query);
                            while ($rowsNo = mysqli_fetch_assoc($queryDbConnection)) {
                                $cat_title =    $rowsNo['cat_title'];?>
                    <input class= "form-control" type="text" name="cat_title" id="" value = "<?php  if(isset($_GET['edit'])){echo  $cat_title ;}   ?>">
                    <?php } }?>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name= "submit1" value="Edit Category">
                </div>
            </form>
        
        <!-- Add category Form -->

    <!-- PHP code HERE   \/|\/   PHP code HERE -->
    <!-- PHP code HERE    \|/    PHP code HERE -->
    <!-- PHP code HERE     V     PHP code HERE -->
        

    <!-- PHP code HERE     ^     PHP code HERE -->
    <!-- PHP code HERE    /|\    PHP code HERE -->
    <!-- PHP code HERE   /\|/\   PHP code HERE -->
        



       
 

        
   
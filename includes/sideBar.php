<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>

                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>

                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->

                <?php 

                
    
                // $outPuts = mysqli_fetch_assoc($queryDbConnection); 
                // print_r($outPuts);
                // print_r ($query_outputs);
                

            ?>

                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">

            <!-- PHP code HERE  |\|||/|  PHP code HERE -->
            <!-- PHP code HERE    \ /    PHP code HERE -->
            <!-- PHP code HERE     V     PHP code HERE -->
            
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php
                            $query = "SELECT * FROM categories";
                            $queryDbConnection = mysqli_query($connect, $query); 
                            while ($outPuts = mysqli_fetch_assoc($queryDbConnection)) {
                            $title = $outPuts['cat_title'];?>
                            
                                <?php echo "<li> <a href='#'> ". $title." </a></li>"; }?>
                                
            <!-- PHP code HERE     ^     PHP code HERE -->
            <!-- PHP code HERE    / \    PHP code HERE -->
            <!-- PHP code HERE  |/|||\|  PHP code HERE -->
                               
                            </ul>
                        </div>         
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a></li>
                            </ul>
                        </div> 
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">

            <!-- PHP code HERE  \|||/  PHP code HERE -->
            <!-- PHP code HERE   \ /   PHP code HERE -->
            <!-- PHP code HERE    V    PHP code HERE -->
            <?php 
                $query = "SELECT * FROM categories";
                $queryTodbConnection = mysqli_query($connect, $query);
    
                // $outPuts = mysqli_fetch_assoc($queryTodbConnection); 
                // print_r($outPuts);
                // print_r ($query_outputs);
                while ($outPuts = mysqli_fetch_assoc($queryTodbConnection)) {
                    $title = $outPuts['cat_title'];

            ?>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php echo "<li><a href=''>".$title."</a></li>"; }?>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>         
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
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
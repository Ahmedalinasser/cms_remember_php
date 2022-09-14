<div class="col-md-8">

    <!-- PHP code HERE  \|||/  PHP code HERE -->
    <!-- PHP code HERE   \ /   PHP code HERE -->
    <!-- PHP code HERE    V    PHP code HERE -->
<?php 
    $query = "SELECT * FROM posts";
    $connect_query = mysqli_query($connect, $query);
    while ($rowsNo = mysqli_fetch_assoc($connect_query)) {
        // foreach ($rowsNo  as $key => $value) {
        //     # code...
        // }
        
        $title = $rowsNo ['post_title'];
        $author = $rowsNo['post_author'];
        $date = $rowsNo['post_date'];
        $content = $rowsNo['post_content'];
        // echo $title;
    ?>


    <!-- PHP code HERE    ^    PHP code HERE -->
    <!-- PHP code HERE   / \   PHP code HERE -->
    <!-- PHP code HERE  /|||\  PHP code HERE -->
<h1 class="page-header">
  
    <small>  <?php echo $title?></small>
</h1>

<!-- First Blog Post -->
<h2>
    <a href="#"><?php echo $title ?> </a>
</h2>
<p class="lead">
    by <a href="index.php"><?php echo $author?> </a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php echo $date ?> </p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p><?php  echo $content?> </p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<?php }?>
<hr>

<!-- Pager -->
<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Older</a>
    </li>
    <li class="next">
        <a href="#">Newer &rarr;</a>
    </li>
</ul>

</div>
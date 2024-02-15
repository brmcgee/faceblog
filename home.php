<?php  include_once('head_section.php'); ?>
<title>Home - faceblog</title>
</head>
<body>
<?php include_once('nav.php') ?>
<?php  


    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM myblogs";
    $query = mysqli_query($conn, $sql);

?>


<?php if(isset($_REQUEST['info'])) { ?>

    <?php if($_REQUEST['info'] == "added") { ?>
 
        <div class="alert alert-success" role="alert">
            Post has been added successfully
        </div>

    <?php } else if($_REQUEST['info'] == "updated"){ ?> 

        <div class="alert alert-info" role="alert">
            Post has been updated successfully
        </div>

    <?php } else if($_REQUEST['info'] == "invalid"){ ?> 

        <div class="bg-warning text dark p-3 m-1 h6" role="alert">
            Invalid credentials please try again!
        </div>

    <?php } else if($_REQUEST['info'] == "comment"){ ?> 

        <div class="bg-info text dark p-3 m-1 h6" role="alert">
            Comment Added
        </div>

    <?php } else if($_REQUEST['info'] == "deleted"){ ?> 

        <div class="alert alert-danger mt-1 p-1" role="alert">
            Blog post has been deleted
        </div>
    
<?php } ?>   

<?php } ?>

    <!-- render all blog from db from $query in logic.php  -->
        <div class="row">     
    <?php 
       foreach($query as $q) { 
    ?>   
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="card  alert alert-light mt-3 shadow-lg border-dark"  style="width:28rem;min-height:24rem;">
                    <div class="card-body">
                        <p><span class="badge bg-dark float-end fs-6"><?php echo $q['category']; ?></span></p>
                            <h5 class="card-title"><?php echo $q['title']; ?></h5>
                            <div class="d-flex justify-content-between">
                                 <p><?php echo $q['body']; ?></p>
                                 <img src="<?php echo $q['img']; ?>" alt="" style="width:100px; height:100px;">
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="container">
                                    <p class="small"><?php echo $q['reg_date']; ?> <span> -<?php echo $q['id']; ?></span></p>
                                    <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn-sm mb-2">Edit <span class="text-warning">&rarr;</span></a>
                                    <br>
                                    <a class="me-0" href="view.php?id=<?php echo $q['id']; ?> "><span class="btn btn-secondary btn-sm">View Comment</span></a>
                                    <a class="me-0"  href="comment.php?id=<?php echo $q['id']; ?>"><span class="btn btn-primary btn-sm">Leave Comment</span></a></td>
                                </div>
                            </div>
                    </div>
                </div>
            </div>              


<?php } ?>
   













<?php  include_once('head_section.php'); ?>
<title>Home - faceblog</title>
</head>
<body>
<?php include_once('nav.php') ?>

<div class="container">
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
      
        <div class="row ">     
    <?php 
       foreach($query as $q) { 
    ?>   
            
        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mb-3">
            <div class="card h-100 shadow-xl border border-dark" style="width:23rem;min-height:22rem;border-radius:0;"> 
                <div class="overflow-hidden" style="max-height: 32vh;">
                    <div class="container px-0">
                        <img src="<?php echo $q['img']; ?>" class="img-fluid" alt="<?php echo $q['category']; ?>" width="900" height="600" loading="lazy">
                    </div>
                </div>         
                   <div class="card-body"> 
                    <div class="clearfix mb-3"> 
                        <p><span class="float-end"></span></p>
                        <span class="float-start badge rounded-pill bg-primary fs-6"><?php echo $q['category']; ?></span> 
                    </div> 
                    <h6><?php echo $q['title']; ?></h6>
                    <p class="card-title fs-strong pb-5"><?php echo $q['body']; ?></p> 
                    <div class="my-4"> 
                        <div class="btn-group position-absolute" style="bottom:0px;">
                            <p class="small position-absolute" style="bottom:30px;"><?php echo $q['reg_date']; ?> <span> -<?php echo $q['id']; ?></span></p>
                            <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn-sm mb-2">Edit <span class="text-light">&rarr;</span></a>
                            <a class="ms-1" href="view.php?id=<?php echo $q['id']; ?> "><span class="btn btn-outline-dark  btn-sm">View </span></a>
                            <a class="ms-1"  href="comment.php?id=<?php echo $q['id']; ?>"><span class="btn btn-primary btn-sm">Leave Comment</span></a></td>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>


<?php } ?>
   
</div>








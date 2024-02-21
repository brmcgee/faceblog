<?php  session_start(); ?>
<?php  include_once('head_section.php'); ?>
<title>Home - faceblog</title>
</head>
<body>

<?php include_once('nav.php') ?>



<div class="container pb-5">
<?php  
    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM myblogs";
    $query = mysqli_query($conn, $sql);

?>

<?php if(isset($_REQUEST['info'])) { ?>

    <?php if($_REQUEST['info'] == "added") { ?>
 
        <div class="alert alert-success mt-3" role="alert">
            Post has been added successfully
        </div>

    <?php } else if($_REQUEST['info'] == "updated"){ ?> 

        <div class="alert alert-info mt-3" role="alert">
            Post has been updated successfully
        </div>

    <?php } else if($_REQUEST['info'] == "newuser"){ ?> 

        <div class="alert alert-primary mt-3" role="alert">
            Succesfully created account
        </div>

    <?php } else if($_REQUEST['info'] == "invalid"){ ?> 

        <div class="bg-warning text dark p-3 mt-3 h6" role="alert">
            Invalid credentials please try again!
        </div>
    <?php } else if($_REQUEST['info'] == "loggedOut"){ ?> 

        <div class="alert alert-danger py-3 mt-3" role="alert">
            You have been successfully logged out!
        </div>        

        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Goodbye!</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Come back soon....you hear!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <!-- <button type="button" class="btn btn-primary btn-lg px-4 gap-3" fdprocessedid="das8is">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4" fdprocessedid="69e2lq">Secondary</button> -->
            </div>
            </div>
        </div>

    <?php } else if($_REQUEST['info'] == "comment"){ ?> 

        <div class="bg-info text dark p-3 m-1 h6" role="alert">
            Comment Added
        </div>

    <?php } else if($_REQUEST['info'] == "deleted"){ ?> 

        <div class="alert alert-danger mt-1 p-3" role="alert">
            Blog post has been deleted
        </div>
        
    
<?php } ?>   

<?php } ?>

    <!-- render all blog from db from $query in logic.php  -->
      
        <div class="row m-0 p-0">     
    <?php 
       foreach($query as $q) { 
    ?>   
     
     
    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mb-2">
        <div class="card h-100" style="width:100%;min-height:21rem;border-radius:0;box-shadow:0px 0px 32px rgb(186, 189, 192);"> 
            <div class="overflow-hidden" style="max-height: 32vh;">
                <div class="container px-0">
                    <img src="<?php echo $q['img']; ?>" class="img-fluid" alt="<?php echo $q['category']; ?>" width="900" height="600" loading="lazy">
                </div>
            </div>         
            <div class="card-body"> 
                <div class="clearfix mb-3"> 
                    <p><span class="float-end"></span></p>
                    <span class="float-start badge rounded-pill bg-secondary fs-6"><?php echo $q['category']; ?></span> 
                </div> 
                <h6><?php echo $q['title']; ?></h6>
                <p class="card-title fs-strong pb-5"><?php echo $q['body']; ?></p> 
                <div class="my-4"> 
                    <div class="btn-group position-absolute" style="bottom:0px;">
                        <p class="small position-absolute " style="bottom:30px;"><?php echo $q['reg_date']; ?></span></p>
                        <!-- <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn-sm mb-2">Edit <span class="text-warning">&rarr;</span></a> -->
                        <a class="ms-1" href="view.php?id=<?php echo $q['id']; ?> "><span class="btn btn-dark  btn-sm">View
                            <span class="badge bg-danger"><?php echo $q['comment_count']; ?></span>
                            </span>
                        </a>
                        <a class="ms-1"  href="comment.php?id=<?php echo $q['id']; ?>"><span class="btn btn-primary btn-sm mb-1">Comment
                            </span>
                        </a>
                    </div>
                </div> 
            </div> 
        </div> 
    </div>


<?php } ?>
   
</div>








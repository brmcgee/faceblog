<?php  session_start(); ?>
<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>Blog View</title>
</head>
<body>
<style>



</style> 
    <?php 
        $post_id = $_REQUEST['id'];

        $sql = "SELECT * FROM myblogs INNER JOIN comments ON myblogs.id = comments.post_id WHERE myblogs.id = $post_id ";
        $view_query = mysqli_query($conn, $sql);
    ?>    
    <!-- render all blog from db from $query in logic.php  -->
    <div class="row m-0 p-0">   
<?php foreach($query as $q) { 
?>

    <!-- <section class="mx-auto col-sm-12 col-md-6 col-lg-4 mt-2" style="max-width: 29rem;">
      <div class="card">
        <div class="card-body d-flex flex-row">
          <img src="<?php echo $q['author_avatar']; ?>" class="rounded-circle me-3" height="50px" width="50px" alt="<?php echo $q['author']; ?>">
          <div>
            <h5 class="card-title font-weight-bold mb-2"><?php echo $q['title']; ?></h5>
            <p class="card-text"><i class="far fa-clock pe-2" aria-hidden="true"></i>April 02, 2019</p>
          </div>
        </div>
        <div class="rounded-0">
          <img class="img-fluid" src="<?php echo $q['img']; ?>" alt="Card image cap">
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.85);"></div>
          </a>
        </div>
        <div class="card-body">
          <p class="card-text"><?php echo $q['body']; ?></p>
          <div class="d-flex justify-content-between">
            <div>
              <p class="card-text bg-primary text-light rounded py-1 px-3 fs-4"><?php echo $q['category']; ?></p>
            </div>
            <div>
              <i class="fas fa-share-alt text-muted p-md-1 my-1 me-2" title="Share this post" aria-hidden="true"></i><span class="material-symbols-outlined">thumb_up</span>
              <i class="fas fa-heart text-muted p-md-1 my-1 me-0" title="I like it" aria-hidden="true"></i><span class="material-symbols-outlined">favorite</span>
            </div>
          </div>
        </div>
            <div class="mt-1 d-flex justify-content-center border border-top py-2 bg-light">
                <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn me-2">Edit <span class="text-light">&rarr;</span></a>
                <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-success btn">Comment</span></a>
            </div>
      </div>
    </section>  -->


    <div class="container-fluid d-flex justify-content-center px-3 mt-3 max-width-900">
        <div class="card mb-3 shadow-lg">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="<?php echo $q['img']; ?>" class="img-fluid rounded-start" alt="<?php echo $q['category']; ?>" width="100%">
                </div>
            <div class="col-md-6">
                <div class="card-body">           
                    <div class="card-body">
                        <p><span class="badge bg-secondary float-end badge rounded-pill bg-secondary fs-5"><?php echo $q['category']; ?></span></p>
                        <h6 class="card-title fs-5"><?php echo $q['title']; ?></h6>
                        <div class="d-flex justify-content-between">
                            <div class="container"><?php echo $q['body']; ?>
                            <p class="pt-2 ps-2 text-secondary"><?php echo $q['reg_date']; ?> by: <?php echo $q['author']; ?></p>
                          </div>
                        </div>
                    <div class="mt-5 d-flex justify-content-around">
                       <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn">Edit <span class="text-light">&rarr;</span></a>

                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Comment</button> -->

                       <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-primary btn">Comment</span></a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php }  ?>
    
<?php foreach($view_query as $q) { 
   ?> 
        <div class="col-sm-10 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
          <div class="chip g-3" style="">
            <img src="<?php echo $q['auth_avatar']; ?>" alt=" <?php echo $q['author']; ?>" width="96" height="96">
              <div class="d-flex justify-content-between">
                <div class="container">
                  <p class=""><?php echo $q['comment']; ?> </p>
                  <p class="mb-0">From - <?php echo $q['author']; ?> </p>
                  <p class ="m-0 p-0"><?php echo $q['date']; ?></p>
                </div>
              </div>
            </div>
        </div>              

<?php }; ?>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo  $_SESSION['a_user'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="container mt-5 col-sm-12 col-md-12" style="width:100%height:100%;">
        <h5 class="text-primary ps-3">Post a comment </h5>
            <form method="POST" enctype="multipart/form-data" class="form-group">
                <div class="row m-0 p-0">
                    <div class="col-6">
                        <label for="post_id" hidden>Post Id</label>
                        <input disabled type="text" hidden name="post_id" placeholder="id" value="<?php echo $q['id']; ?>" class="form-control bg-light  my-3 text-center">
                    </div>
                    <div class="col-6">
                        <label for="id" hidden>Comment Id</label>
                        <input disabled type="text" name="id" placeholder="auto" value="" hidden class="form-control bg-light  my-3 text-center">
                    </div>
                    <div class="col-12">
                        <label for="comment" hidden>Comment</label>
                        <textarea type="text" name="comment" placeholder="comment" class="form-control bg-light  my-3 text-center" rows="3"> </textarea>
                    </div>
                    <div class="col-12">
                        <label for="authAvatar" hidden>Author Avatar</label>
                        <input type="text" hidden name="authAvatar" value="<?php echo  $_SESSION['a_avatar'];?>" class="form-control bg-light  my-3 text-center"> 
                    </div>
                    <div class="col-12">
                        <label for="author" hidden>Author</label>
                        <input type="text" hidden name="author" value="<?php echo  $_SESSION['a_user'];?>" class="form-control bg-light  my-3 text-center"> 
                    </div>
                    <div class="col-12">
                        <label for="counter" hidden>Counter</label>
                        <input type="number" hidden name="counter" value="<?php echo $comment_counter + 1; ?>" class="form-control bg-light  my-3 text-center"> 
                    </div>
                </div> 

        <button name="add-comment" class="btn btn-dark ms-2">Send</button>

    </form>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



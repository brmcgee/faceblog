<?php session_start(); ?>
<?php include_once('head_section.php'); ?>
<?php
    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM myblogs";
    $query = mysqli_query($conn, $sql);    
?>
    <title>Home - faceblog</title>
  </head>
  <body class="bg-main pb-5">
    <?php include_once('nav.php'); ?>


    <!-- masthead  -->
    <div class="container-xl overflow-hidden p-1 mt-3 pb-5" id="top">
     <div class="px-4 pt-5 my-5 text-center border-bottom font-h" style="background-color:rgb(204, 206, 209);">
        <h1 class="display-4 fw-bold text-body-emphasis">Blog App Beta</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Beta version of blog app. Visit back for updates. Sign in and add a post.</p>
            
        
        <div class="btn-group">
            <!-- button for create new widget  -->
            <p class="nav-item"><a href="landing.php" class="btn btn-outline-dark mx-1">Landing</a></p>
            <small class="nav-item"><button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#cmodal">New Post</button></small>   
        </div>


        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://tse1.mm.bing.net/th?id=OIP.wAbYX1LSFymbu8-8YMASKAHaD4&pid=Api&P=0&h=220" class="img-fluid rounded-3 shadow-lg mb-4" alt="Food" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <!-- blog post cards all  -->
    <div class="row m-0 p-0">
<?php foreach($query as $q) { ?>

     <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mb-2 ">
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
                        <a class="ms-1" href="view.php?id=<?php echo $q['id']; ?> "><span class="btn btn-dark  btn-sm">View
                            <span class="badge bg-danger"><?php echo $q['comment_count']; ?></span>
                            </span>
                        </a>
                        <a class="ms-1"  href="comment.php?id=<?php echo $q['id']; ?>"><span class="btn btn-primary btn-sm mb-1">Comment</span></a>
                    </div>
                </div> 
            </div> 
        </div> 
      </div>

<?php 
    } 
?>
    </div>










    <?php 
    //sets active user info card if not logged in with avatar diplay_name adisplay_date
    if (isset($_SESSION['a_avatar'])) {
        $avatar = $_SESSION['a_avatar'];
    } else {
        $avatar = 'https://tse4.mm.bing.net/th?id=OIP.IaWUHQyifxlzXpiltkNltAHaHf&pid=Api&P=0&h=220';
    };
    if (isset($_SESSION['a_user'])) {
        $display_name = $_SESSION['a_user'];
    } else {
        $display_name = '<a href="landing.php" class="text-decoration-none text-dark"><span class="material-symbols-outlined fs-1 pt-2">login</span></a>';
    };
    if (isset($_SESSION['a_date'])) {
        $display_date = $_SESSION['a_date'];
    } else {
        $display_date = '';
    };
    if (isset($_SESSION['a_user'])) {
        $display_ID = $_SESSION['a_ID'];
    } else {
        $display_ID = '<a href="landing.php" class="text-decoration-none text-dark"><span class="material-symbols-outlined fs-1 pt-2">login</span></a>';
    };
?>


    <!-- button for create new widget  -->
    <small class="nav-item ms-1 " style="top:0px;left:2px;"><button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#cmodal">New</button></small>




    <!-- Modal -->
    <div class="modal fade" id="cmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height:100%vh;">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new blog</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        <div class="container mt-5 col-sm-12 col-md-8">
        <form method="POST" enctype="multipart/form-data" class="form-group">
        <div class="row">
            <h3>Hello <?php echo $display_name?></h3>
            <div class="col-12">
                <label for="author" hidden >Author</label>
                <input type="text" name="author" hidden value="<?php echo $display_name?>" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-12">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="title" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-12">
                <label for="body">Post Content</label>
                <textarea  type="text" name="body" placeholder="blog post content" class="form-control bg-light  my-3 text-center" rows="3"></textarea>
            </div>

            <div class=" col-8 col-lg-10">
                <label for="category">Category</label>
                <!-- <input type="text" name="category" placeholder="category" class="form-control bg-light  my-3 text-center">  -->
                
                <select name="category"  class="form-select form-control bg-light  my-3 text-center">
                    <?php 

                    $sql = "SELECT * FROM `category`";
                    $all_categories = mysqli_query($conn,$sql);

                    while ($category = mysqli_fetch_array(
                            $all_categories,MYSQLI_ASSOC)):; 
                    ?>
                    
                    <option value="<?php echo $category["Category_Name"];?> ">
                        <?php echo $category["Category_Name"];?>
                    </option>
                    <?php  endwhile; ?>
                </select>
            </div>
            <!-- button for categories modal -->
            <div class="col-1">
                <button type="button" class="btn btn-primary" style="margin-top:35px;" data-bs-toggle="modal" data-bs-target="#catModal"><span class="material-symbols-outlined" style="color:#fff !important;">edit</span>Categories</button>
            </div>


            <div class="col-12">
                <label for="image">Image</label>
                <input type="text" name="image" placeholder="image URL" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="auth" hidden >Auth Display</label>
                <input type="text" hidden name="auth" value="<?php echo $display_name; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="avatar" hidden>Auth Avatar</label>
                <input type="text" hidden name="avatar" value="<?php echo $avatar; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="authId" hidden>Auth Display</label>
                <input type="text" hidden name="authId" value="<?php echo $display_ID; ?>" class="form-control bg-light  my-3 text-center">
            </div>


            <div class="col-12">
                <label for="date" hidden>Date</label>
                <input type="text" hidden name="date" value="<?php print strftime('%D'); ?>" class="form-control bg-light  my-3 text-center">
            </div>

        </div> 
        <a href="index.php" class="btn btn-primary mt-5" aria-current="page"><span class="material-symbols-outlined" style="color:#fff !important;">home</span>Home</a>
        <!-- <a href="add-category.php" class="btn btn-primary mt-5" aria-current="page">Add category</a> -->
        <button name="new_post" class="btn btn-dark mt-5 ms-5" id="btnAdd"><span class="material-symbols-outlined" style="color:#fff !important;">done</span>Add Post</button>

      </form>
    </div>



    </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
    </div>


            
        





<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
            <!-- add category widget  -->
            <div class="container-md mx-auto w-50">
                <form method="POST">
                    <label>Add ategory:</label> <br>
                    <input type="text" name="categoryAdd" required>
                    <br>
                    
                    <br>
                    <input type="submit" value="Add" name="add-category" class="btn btn-success">
                </form>
            </div>
            

             <!-- delete category widget  -->
            <div class="container-md mx-auto w-50">
                <form method="POST">
                    <br>
                    <label>Delete Category:</label> <br>
                    <br>
                    <select name="category"  class="form-select form-control bg-light  my-3 text-center">
                            <?php 

                            $sql = "SELECT * FROM `category`";
                            $all_categories = mysqli_query($conn,$sql);

                            while ($category = mysqli_fetch_array(
                                    $all_categories,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $category["Category_ID"];?> " name="<?php echo $category["Category_Name"] ?>">
                                <?php echo $category["Category_Name"];?>
                            </option>

                            <?php  endwhile; ?>
                    </select>
                    <input type="submit" value="Delete" name="delete-category" class="btn btn-danger">
                </form>
            </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>











  </body>
</html>









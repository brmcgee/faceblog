<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<style>
    .user-chip {
    display: inline-block;
    padding: 0 25px;
    height: 52px;
    font-size: 16px;
    line-height: 52px;
    border-radius: 0px;
    background-color: #f1f1f1;
    box-shadow: 0 0 28px grey;
    
  }
  
  .user-chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 52px;
    width: 52px;
    border-radius: 50%;
  }

  
</style>
<?php 

    if (isset($_SESSION['a_avatar'])) {
        $avatar = $_SESSION['a_avatar'];
    } else {
        $avatar = 'https://tse1.mm.bing.net/th?id=OIP.T8KxdBzU1cndmTwhxMCsLwHaHa&pid=Api&P=0&h=220';
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

?>
    <!-- render all blog from db from $query in logic.php  -->
    <div class="row">   
      <div class="container-md border-bottom shadow-xl mb-1 bg-light">
        <header class="d-flex justify-content-end py-3">
        <div class="user-chip position-absolute"  id="userChip" style="left:4px;top:22px;">
            <img src=" <?php echo $avatar;?>" alt="" width="96" height="96">
            <small class="mb-5"><?php echo $display_name;?></small>
            <small class="position-absolute" style="bottom:-17px;left:55px;"><?php echo $display_date;?></small>
        </div>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="" aria-current="page"><span class="material-symbols-outlined fs-1">home</span></a></li>
            <!-- <li class="nav-item"><a href="table.php" class="btn btn-outline-dark mx-1">Table</a></li> -->
            <!-- <li class="nav-item"><a href="edit.php?id=1" class="nav-link">Edit</a></li> -->
            <!-- <li class="nav-item ms-1"><button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">New</button></li> -->
            <li class="nav-item"><a href="create.php" class="border-none ms-3"><span class="material-symbols-outlined fs-1">add_circle</span></a></li>
            <li class="nav-item"><a href="logout.php" class="border-none ms-3 pe-3" id="logOutBtn"><span class="material-symbols-outlined fs-1">logout</span></a></li>
        </ul>
        </header>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height:100%vh;">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new blog</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="container-fluid mt-5">
            <form method="POST" enctype="multipart/form-data" class="form-group">
                
                <div class="row">
                    <div class="col-12">
                        <label for="author">Author</label>
                        <input type="text" name="author" placeholder="author" class="form-control bg-light  my-3 text-center"> 
                    </div>
                    <div class="col-12">
                        <label for="body">Body</label>
                        <input type="text" name="body" placeholder="blog post content" class="form-control bg-light  my-3 text-center">
                    </div>
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="title" class="form-control bg-light  my-3 text-center"> 
                    </div>
                    <div class="col-12">
                        <label for="category">Category</label>
                        <input type="text" name="category" placeholder="category" class="form-control bg-light  my-3 text-center"> 
                    </div>
                    <div class="col-12">
                        <label for="image">Image</label>
                        <input type="text" name="image" placeholder="image" class="form-control bg-light  my-3 text-center">
                    </div>
                    <div class="col-12">
                        <label for="date" hidden>Date</label>
                        <input type="text" hidden name="date" value="<?php print strftime('%D'); ?>" class="form-control bg-light  my-3 text-center">
                    </div>
                </div> 

                <hr>
                
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button name="new_post" class="btn btn-primary" id="btnAdd">Add Post</button>
            </form>


            </div>
        </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
    </div>



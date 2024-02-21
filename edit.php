<?php
require('access.php');
?>

<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>Edit Guest</title>
</head>
<body>
  

<div class="container px-3 mt-5 pb-5 col-sm-11 col-md-8 mb-5">
<?php foreach ($query as $q) {   
?>
    <form method="PUT" enctype="multipart/form-data" class="form-group">
        <h3>Welcome <span class="text-primary"><?php echo  $_SESSION['a_user'];?></span>!</h3>
        <div class="row m-0 p-0">

            <div class="col-12">
                <label for="id" hidden>Id</label>
                <input  type="text" name="id" hidden placeholder="id" value="<?php echo $q['id']; ?>" class="form-control bg-light  my-3 text-center">
            </div>

            <div class="col-sm-12 col-md-6">
                <label for="author" hidden>Author</label>
                <input type="text" hidden name="author" value="<?php echo $q['author']; ?>" class="form-control bg-light  my-3 text-center"> 
            </div>

            <div class="col-sm-12 col-md-6">
                <label hidden for="date">Date</label>
                <input hidden type="text"  name="date" value="<?php echo $q['reg_date']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="body">Body</label>
                <input type="text" name="body" value="<?php echo $q['body']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="title">Title</label>
                <input type="text" name="title" value="<?php echo $q['title']; ?>" class="form-control bg-light  my-3 text-center"> 
            </div>



            <!-- <div class="col-12">
                <label  for="category1">Category</label>
                <input  type="text" name="category"  value="<?php echo $q['category']; ?>" class="form-control bg-light  my-3 text-center"> 
            </div> -->

            <div class=" col-8 col-lg-10">
                <label for="category">Category</label>
                <!-- <input type="text" name="category" placeholder="category" class="form-control bg-light  my-3 text-center">  -->
                
                <select name="category"  class="form-select form-control bg-light  my-3 text-center">
                    <option value="<?php echo $q['category']; ?>"><?php echo $q['category']; ?></option>
                    
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
                <input type="text" name="image" value="<?php echo $q['img']; ?>" class="form-control bg-light  my-3 text-center">
            </div>

        </div> 
    
    
        <button name="update" class="btn btn-dark">Update</button>

        <!-- Delete Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGuest">Delete</button>

    </form>
</div>



<!-- Delete Modal -->
<div class="modal fade" id="deleteGuest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning Delete Contact</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post">
            <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
            <div class="container text-center">
                <p><?php echo  $_SESSION['a_user'];?>, you are about to delete a contact. Once a contact is deleted it can not be undone. Are you sure you want to delete contact?</p>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-danger ms-1" name="delete">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- categories Modal -->
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
                    <label>Add Category:</label> <br>
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



<?php } ?>


<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>

    <div class="container border-bottom shadow-xl mb-1 bg-light">
        <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
            <!-- <li class="nav-item"><a href="index.php" class="nav-link">Index</a></li> -->
            <li class="nav-item"><a href="table.php" class="btn btn-outline-dark mx-1">Table</a></li>
            <!-- <li class="nav-item"><a href="edit.php?id=1" class="nav-link">Edit</a></li> -->
            <li class="nav-item"><button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">New</button></li>
        </ul>
        </header>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="date">Date</label>
                        <input type="text" name="date" value="<?php print strftime('%D'); ?>" class="form-control bg-light  my-3 text-center">
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



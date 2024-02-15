<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>Edit Guest</title>
</head>
<body>

<?php foreach ($query as $q) { ?>

<div class="container mt-5 col-sm-12 col-md-8">
    <form method="PUT" enctype="multipart/form-data" class="form-group">
        <div class="row">
            <div class="col-12">
                <h4>Blog ID <?php echo $q['id']; ?> </h4>
                <label for="id" hidden>Id</label>
                <input  type="text" name="id" hidden placeholder="id" value="<?php echo $q['id']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="author">Author</label>
                <input type="text" name="author" value="<?php echo $q['author']; ?>" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="date">Date</label>
                <input type="text" name="date" value="<?php echo $q['reg_date']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="body">Body</label>
                <input type="text" name="body" value="<?php echo $q['body']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="title">Title</label>
                <input type="text" name="title" value="<?php echo $q['title']; ?>" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-12">
                <label for="category">Category</label>
                <input type="text" name="category" value="<?php echo $q['category']; ?>" class="form-control bg-light  my-3 text-center"> 
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
                <p>You are about to delete a contact. Once a contact is deleted it can not be undone. Are you sure you want to delete contact?</p>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-danger ms-1" name="delete">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php } ?>


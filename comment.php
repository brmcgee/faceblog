<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>Add Comment</title>
</head>
<body>

<?php foreach ($query as $q) { ?>
<div class="container ">   
    <div class="card mb-3 border border-secondary shadow-lg mx-auto" style="max-width: 840px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="<?php echo $q['img']; ?>" class="img-fluid rounded-start" alt="<?php echo $q['category']; ?>">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo $q['title']; ?></h5>
            <p class="card-text">Author- <?php echo $q['author']; ?></p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
        </div>
    </div>
    </div>
</div> 
    
<div class="container mt-5 col-sm-12 col-md-6">
    <form method="POST" enctype="multipart/form-data" class="form-group">
        <div class="row">
            <div class="col-6">
                <label for="post_id" hidden>Post Id</label>
                <input disabled type="text" hidden name="post_id" placeholder="id" value="<?php echo $q['id']; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-6">
                <label for="id" hidden>Comment Id</label>
                <input disabled type="text" name="id" placeholder="auto" value="" hidden class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-12">
                <label for="comment">Comment</label>
                <input type="text" name="comment" placeholder="comment" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-12">
                <label for="author">Author</label>
                <input type="text" name="author" placeholder="first name" class="form-control bg-light  my-3 text-center"> 
            </div>
        </div> 

        <button name="add-comment" class="btn btn-dark">Comment</button>
    </form>
</div>
<?php } ?>;


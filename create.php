<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>

    <title>Add Blog</title>
</head>
<body>

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
        <button name="new_post" class="btn btn-dark mt-5" id="btnAdd">Add Post</button>
    </form>
</div>
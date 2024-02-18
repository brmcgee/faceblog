<?php require('access.php'); ?>
<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>


<?php 

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

?>

    <title>Add Blog</title>
</head>
<body>

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
                <a href="index.php" class="btn btn-primary mt-5" aria-current="page">Home</a>
        <button name="new_post" class="btn btn-dark mt-5" id="btnAdd">Add Post</button>
        

    </form>
</div>


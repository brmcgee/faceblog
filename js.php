<?php require('access.php'); ?>

<?php
    include_once('head_section.php');

    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM myblogs";
    $query = mysqli_query($conn, $sql);    
?>
    <title>Home - faceblog</title>
  </head>
    <body class="bg-main">
        <script>
            let blogger = [
            {
                title : "ss",
                id : "ss",
                body : "ss",
                img : "ss",
                author : "ss",
                avatar: "ss"
            }            
            ]; 

            let count = 0;
        </script>

<?php include_once('nav.php'); ?>

      <!-- masthead -->
      <div class="container-xl overflow-hidden p-1 mt-3">
          <div class="px-4 pt-5 my-5 text-center border-bottom" style="background-color:rgb(204, 206, 209);">
              <h1 class="display-4 fw-bold text-body-emphasis">Blog App Beta</h1>
              <h5 class="fw-bold text-body-emphasis">Welcome <span class="text-primary"><?php echo  $_SESSION['a_user'];?></span></h5>
              <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">View or Add blog posts</p>
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

<?php
    // sets img and avatar if empty values 
    if (empty($q['author_avatar'])) {
                $avatar_img = 'https://tse1.mm.bing.net/th?id=OIP.2FEmD6CuQH9Ac_9dFNcaoAHaHa&pid=Api&P=0&h=220';
            } 
            else {
                $avatar_img  = $q['author_avatar'];
            };
?>  
<script>

            blog
    blog_title.push(`<?php echo $q['title']; ?>`);
    blog_id.push(`<?php echo $q['id']; ?>`);
    blog_body.push(`<?php echo $q['body']; ?>`);
    blog_img.push(`<?php echo $q['img']; ?>`);
    blog_author.push(`<?php echo $q['author']; ?>`);
    blog_author_avatar.push(`<?php echo $q['author_avatar']; ?>`);

</script>

    
    <section class="mx-auto col-sm-12 col-md-6 col-lg-5 mt-2" style="max-width: 29rem; min-height: 80vh;">
      <div class="card">
        <div class="card-body d-flex flex-row">
          <img src="<?php echo $avatar_img; ?>" class="rounded-circle me-3" height="50px" width="50px" alt="<?php echo $q['author']; ?>">
          <div>
            <h5 class="card-title font-weight-bold mb-2"><?php echo $q['title']; ?></h5>
            <p class="card-text"><i class="far fa-clock pe-2" aria-hidden="true"></i><?php echo $q['reg_date']; ?>9</p>
          </div>
        </div>
        <div class="rounded-0">
          <img class="img-fluid" width="100%" src="<?php echo $q['img']; ?>" alt="Card image cap">
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.85);"></div>
          </a>
        </div>
        <div class="card-body">
          <p class="card-text"><?php echo $q['body']; ?></p>


          
        </div>
            <div class="mt-1 d-flex justify-content-center border border-top py-2 bg-light">
                <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn me-2">Edit <span class="text-light">&rarr;</span></a>
                <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-dark btn">Comment</span></a>
            </div>
      </div>
    </section> 

<?php 
} 
?>
    </div>
  </body>
</html>



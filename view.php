<?php  session_start(); ?>
<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>View Guest</title>
</head>
<body>
<style>
    .chip {
  display: inline-block;
  padding: 2px 25px;
  height: 65px;
  font-size: 16px;
  line-height: 28px;
  border-radius: 25px;
  background-color: #f1f1f1;
  margin-bottom: 5px;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
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
    <div class="container-fluid d-flex justify-content-center px-3 mt-3">
        <div class="card mb-3" style="max-width: 1240px;border-radius:0;box-shadow:0px 12px 32px rgb(186, 189, 192);">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $q['img']; ?>" class="img-fluid rounded-start" alt="<?php echo $q['category']; ?>" width=100%>
                </div>
            <div class="col-md-8">
                <div class="card-body">           
                    <div class="card-body">
                        <p><span class="badge bg-secondary float-end badge rounded-pill bg-secondary fs-5"><?php echo $q['category']; ?></span></p>
                        <h6 class="card-title fs-5"><?php echo $q['title']; ?></h6>
                        <div class="d-flex justify-content-between">
                            <div class="container">Body <?php echo $q['body']; ?>
                            <p class="pt-2 ps-2 text-secondary"><?php echo $q['author']; ?></p>
                          </div>
                        </div>
                    <div class="card-title mt-5">
                       <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn position-absolute" style="right: 25px;">Edit <span class="text-light">&rarr;</span></a>
                        <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-primary btn">Comment</span></a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        }
    
    ?></p>
    
<?php foreach($view_query as $q) { 
   ?> 
   
  

            <div class="col-sm-10 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <!-- <div class="card  bg-light alert  mt-3 shadow-lg "  style="width:24rem;min-height:10rem;">
                    <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="container bg-">
                                    <p class="fs-5"><?php echo $q['comment']; ?> </p>
                                    <p class="mb-0">From - <?php echo $q['author']; ?> </p>
                                    <p class m-0 p-0><?php echo $q['date']; ?></p>
                                </div>
                            </div>
                    </div>
                </div> -->
                <div class="chip g-3" style="width:21rem;min-height:10rem;height:auto;">
                    <img src="<?php echo $q['auth_avatar']; ?>" alt="Person" width="96" height="96">
                        <div class="d-flex justify-content-between">
                            <div class="container">
                                <p class="fs-5"><?php echo $q['comment']; ?> </p>
                                <p class="mb-0">From - <?php echo $q['author']; ?> </p>
                                <p class m-0 p-0><?php echo $q['date']; ?></p>
                            </div>
                        </div>
                    </div>
            </div>              

     <?php 
        } 
     ?>



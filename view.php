<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>
<?php include_once("nav.php") ?>
    <title>View Guest</title>
</head>
<body>
    <?php 
        $post_id = $_REQUEST['id'];

        $sql = "SELECT * FROM myblogs INNER JOIN comments ON myblogs.id = comments.post_id WHERE myblogs.id = $post_id ";
        $view_query = mysqli_query($conn, $sql);
    ?>    

    <!-- render all blog from db from $query in logic.php  -->
    <div class="row">   
        
    

    <p><?php 
        
        foreach($query as $q) { ?>
    
    <div class="container-fluid d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 1240px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $q['img']; ?>" class="img-fluid rounded-start" alt="..." width=100%>
            </div>
            <div class="col-md-8">
            <div class="card-body">           
            <div class="card-body">
                <p><span class="badge bg-secondary float-end fs-6"><?php echo $q['category']; ?></span></p>
                    <h6 class="card-title"><?php echo $q['title']; ?></h6>
                    <div class="d-flex justify-content-between">
                        <div class="container">Body <?php echo $q['body']; ?>
                        </div>
                    </div>
                    <div class="card-title mt-5">
                       <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-outline-dark btn">Edit <span class="text-light">&rarr;</span></a>
                        <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-primary btn">Leave Comment</span></a></td>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    
    <!-- <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="card  alert alert-light mt-3 shadow-lg border-dark"  style="width:28rem;min-height:12rem;">
                    <div class="card-body">
                        <p><span class="badge bg-secondary float-end fs-6"><?php echo $q['category']; ?></span></p>
                            <h6 class="card-title"><?php echo $q['title']; ?></h6>
                            <div class="d-flex justify-content-between">
                                <div class="container">
                                    Body <?php echo $q['body']; ?>
                                </div>
                            </div>
                            <div class="card-title mt-5">
                                <a href="comment.php?id=<?php echo $q['id']; ?> "><span class="btn btn-primary btn-sm">Leave Comment</span></a></td>
                            </div>

                    </div>
                </div>
            </div>          -->


    <?php
        }
    
    ?></p>
    
    <?php 



       foreach($view_query as $q) { 
    
    ?>   
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="card  alert  mt-3 shadow-lg "  style="width:24rem;height:12rem;">
                    <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <div class="container">
    
                                    <p class="lead">- <?php echo $q['comment']; ?> </p>
                                    <p class="mb-0">From - <?php echo $q['author']; ?> </p>
                                    <p class m-0 p-0><?php echo $q['date']; ?></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>              

     <?php 
        } 
     ?>



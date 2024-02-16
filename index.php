<?php
    include_once('head_section.php');

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
                Not able to establish Database Connection</h3>";
    }


    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM myblogs";
    $query = mysqli_query($conn, $sql);    

?>

    <div class="container-xl overflow-hidden p-1 mt-3">

<?php include_once('nav.php'); ?>

      <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis">Peely and Fishsticks,the OGs</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Peely, one of the most fan-favorite characters in Fortnite, is now on the map as an NPC, and players can interact with him at The Daily Bugle POI. There’s plenty of Fishstick in the sea, but only one is the OG. </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">

                <a class="ms-3 me-0" href="comment.php?id=13 "><span class="btn btn-primary">Comment</span></a>
                <a class="ms-3 me-0" href="view.php?id=13 "><span class="btn btn-dark">View </span></a>
        </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
        <div class="container px-5">
            <img src="https://tse2.mm.bing.net/th?id=OIP.EtZYa2ElRbB7bR7MQG-lHAHaEr&amp;pid=Api&amp;P=0&amp;h=220" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Food" width="700" height="500" loading="lazy">
        </div>
        </div>
    </div>
    <div class="row">
<?php foreach($query as $q) { ?>

    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mb-5">
            <div class="card h-100" style="width:20rem;min-height:22rem;border-radius:0;box-shadow:0px 12px 32px rgb(186, 189, 192);"> 
                <div class="overflow-hidden" style="max-height: 32vh;">
                    <div class="container px-0">
                        <img src="<?php echo $q['img']; ?>" class="img-fluid" alt="<?php echo $q['category']; ?>" width="900" height="600" loading="lazy">
                    </div>
                </div>         
                   <div class="card-body"> 
                    <div class="clearfix mb-3"> 
                        <p><span class="float-end"></span></p>
                        <span class="float-start badge rounded-pill bg-secondary fs-6"><?php echo $q['category']; ?></span> 
                    </div> 
                    <h6><?php echo $q['title']; ?></h6>
                    <p class="card-title fs-strong pb-5"><?php echo $q['body']; ?></p> 
                    <div class="my-4"> 
                        <div class="btn-group position-absolute" style="bottom:0px;">
                            <p class="small position-absolute " style="bottom:30px;"><?php echo $q['reg_date']; ?> <span> -<?php echo $q['id']; ?></span></p>
                            <!-- <a href="edit.php?id=<?php echo $q['id']; ?> " class="btn btn-dark btn-sm mb-2">Edit <span class="text-warning">&rarr;</span></a> -->
                            <a class="ms-1" href="view.php?id=<?php echo $q['id']; ?> "><span class="btn btn-dark  btn-sm">View </span></a>
                            <a class="ms-1"  href="comment.php?id=<?php echo $q['id']; ?>"><span class="btn btn-primary btn-sm mb-1">Leave Comment</span></a></td>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>

<?php 
    } 
?>
</div>

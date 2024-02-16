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

<?php foreach($query as $row) { ?>

    

        <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis"><?php echo $row["title"]; ?></h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo $row['body']; ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="ms-3 me-0" href="edit.php?id=<?php echo $row['id']; ?> "><span class="btn btn-primary">Edit</span></a>
                <a class="ms-3 me-0" href="comment.php?id=<?php echo $row['id']; ?> "><span class="btn btn-outline-primary">Leave Comment</span></a>
                <a class="ms-3 me-0" href="view.php?id=<?php echo $row['id']; ?> "><span class="btn btn-outline-primary">View Comments</span></a>
        </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
        <div class="container px-5">
            <img src="<?php echo $row['img']; ?>" class="img-fluid border rounded-3 shadow-lg mb-4" alt="<?php echo $row['category']; ?>" width="700" height="500" loading="lazy">
        </div>
        </div>
    </div>




    </div>   

<?php 
    } 
?>
</table>

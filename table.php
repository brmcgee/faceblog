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

    <table class='table table-bordered table-striped'>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Title</td>
            <td>Image</td>
            <td>Author</td>
            <td>Date</td>
        </tr>
<?php include_once('nav.php'); ?>

<?php foreach($query as $row) { ?>

        <tr>
            <td><a class="ms-3 me-0" href="edit.php?id=<?php echo $row['id']; ?> "><span class="badge text-bg-secondary bg-primary">Edit</span></a></td>
            <td><a class="ms-3 me-0" href="comment.php?id=<?php echo $row['id']; ?> "><span class="badge text-bg-secondary bg-primary">Leave Comment</span></a></td>
            <td><a class="ms-3 me-0" href="view.php?id=<?php echo $row['id']; ?> "><span class="badge text-bg-secondary bg-primary">View Comment</span></a></td>
            <td><?php echo $row["title"]; ?></td>
            <td><img src="<?php echo $row["img"]; ?>" alt="" style="height:70px;width:80px;"></td>
            <td><?php echo $row["author"]; ?></td>
            <td><?php echo $row["reg_date"]; ?></td>
        </tr>


    </div>   

<?php 
    } 
?>
</table>

<?php
    include_once('db.php');

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
                Not able to establish Database Connection</h3>";
    }


    if(isset($_REQUEST["new_post"])) {

        // $id = $_REQUEST['id'];
        $author = $_REQUEST['author'];
        $body = $_REQUEST['body'];
        $title = $_REQUEST['title'];
        $category = $_REQUEST['category'];
        $img = $_REQUEST['image'];
        $reg_date = $_REQUEST['date'];

        // $sql = "INSERT INTO myblogs (author, title, body, category, img, reg_date) 
        // VALUES ('$author', '$title',  '$body', '$category', '$img', '$reg_date')";

        $sql = "INSERT INTO myblogs (author, title, body, category, img, reg_date) 
        VALUES ('$author', '$title',  '$body', '$category', '$img', '$reg_date')";

        mysqli_query($conn, $sql);

        header("Location: home.php?info=added");
        exit();
    };


    // view selected post id from DB
    // if request contains id in url from view button href run logic 
    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM myblogs WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }


    // edit post and update DB 
    // if request contains edit button name return on request
    if(isset($_REQUEST['update'])) {

        // $id = $_REQUEST['id'];
        $author = $_REQUEST['author'];
        $body = $_REQUEST['body'];
        $title = $_REQUEST['title'];
        $category = $_REQUEST['category'];
        $img = $_REQUEST['image'];
        $reg_date = $_REQUEST['date'];
        
        
        $sql = "UPDATE myblogs 
                SET author = '$author', 
                    title = '$title',     
                    body = '$body',  
                    category = '$category', 
                    img = '$img', 
                    reg_date = '$reg_date' 
                WHERE id = $id ";

        mysqli_query($conn, $sql);

        // location where to be directed to after sql query 
        header("Location: home.php?info=updated");
        exit();
    };


    
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM myblogs WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        // location where to be directed to after sql query 
        header("Location: home.php?info=deleted");
        exit();
    } 




    if(isset($_REQUEST['add-comment'])) {

        $post_id = $_REQUEST['id'];
        $comment = $_REQUEST['comment'];
        $author = $_REQUEST['author'];
        $date = $_REQUEST['date'];

        $sql = "INSERT INTO comments (post_id, comment, author) 
        VALUES ('$post_id', '$comment', '$author')";


        mysqli_query($conn, $sql);

        // location where to be directed to after sql query 
        header("Location: view.php?id=$post_id");
        exit();
    };





if(isset($_REQUEST['view'])) {

    $post_id = $_REQUEST['id'];

    $comment_post_sql = "SELECT * FROM myblogs INNER JOIN comments ON myblogs.id = comments.post_id WHERE myblogs.id = $post_id ";
    mysqli_query($conn, $comment_post_sql);
    
    header("Location: home.php?info=view");
    exit();
}




?>
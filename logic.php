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

            $sql = "INSERT INTO myblogs (author, title, body, category, img) 
            VALUES ('$author', '$title',  '$body', '$category', '$img')";

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

        $comment_sql = "DELETE FROM comments WHERE post_id = $id";
        $comment_query = mysqli_query($conn, $comment_sql);


        // location where to be directed to after sql query 
        header("Location: home.php?info=deleted");
        exit();
    } 




    if(isset($_REQUEST['add-comment'])) {

        $post_id = $_REQUEST['id'];
        $comment = $_REQUEST['comment'];
        $author = $_REQUEST['author'];
        $date = $_REQUEST['date'];
        $comment_counter = $_REQUEST['counter'];
        $auth_avatar = $_REQUEST['authAvatar'];
        
        
        // add comment to table 
        $sql = "INSERT INTO comments (post_id, comment, author, auth_avatar) 
        VALUES ('$post_id', '$comment', '$author', '$auth_avatar')";
        mysqli_query($conn, $sql);

        // add comment counter to table 
        $counter_sql =  "UPDATE myblogs SET comment_count = '$comment_counter' WHERE id = $post_id ";
        mysqli_query($conn, $counter_sql);

        // add avatar image 
        // $avatar_sql =  "INSERT INTO comments (auth_avatar) 
        // VALUES ('$auth_avatar')";
        // mysqli_query($conn, $avatar_sql);


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


<?php
    if(isset($_REQUEST['signup'])) {

        $user_id = $_REQUEST['user_id'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['userpassword'];
        $avatar = $_REQUEST['avatar'];
        $fullname = $_REQUEST['fullname'];

        $user_sql = "INSERT INTO users (username, userpassword, avatar, fullname) 
        VALUES ('$username', '$password', '$avatar', '$fullname')";

        mysqli_query($conn, $user_sql);

    
        header("Location: home.php?info=newuser");
        exit();
    }
?>

<?php

if (isset($_SESSION['loggedIn'])) {

if(isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM brm WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    // location where to be directed to after sql query 
    header("Location: home.php?info=deleted");
    exit();
} 

} 

if(isset($_REQUEST['delete'])) {
if (!isset($_SESSION['loggedIn'])) {
    header("Location: home.php?info=invalid");
    exit();
}
}

?>




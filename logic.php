<?php 
    include_once('db.php');


    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
                Not able to establish Database Connection</h3>";
    }

    if (isset($_REQUEST['like'])) {

        if($_POST['like']) {

            $sql = "UPDATE likes set `likes` = `likes`+1 where `product_id` = '1'";
            $result=mysql_query($sql);
            }

        
        header("Location: home.php?info=added");
        exit();

    }
    if(isset($_REQUEST["new_post"])) {

            $author = $_REQUEST['author'];
            $body = $_REQUEST['body'];
            $title = $_REQUEST['title'];
            $category = $_REQUEST['category'];
            $reg_date = $_REQUEST['date'];
            $avatar = $_REQUEST['avatar'];
            $author_id = $_REQUEST['authId'];

            $post_image = $_REQUEST['image'];

            if (empty($_REQUEST['image'])) {
                $img = 'https://tse2.mm.bing.net/th?id=OIP.Z6Ev8tnsqd7Pw5CpuHykFQHaE8&pid=Api&P=0&h=220';
            } 
            else {
                $img = $_REQUEST['image'];
            };

            $sql = "INSERT INTO myblogs (author, title, body, category, img, author_id, author_avatar) 
            VALUES ('$author', '$title',  '$body', '$category', '$img', '$author_id', '$avatar')";

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


<?php

if(isset($_REQUEST["like"])) {

    $post_id = $_REQUEST['postId'];
    $author = $_REQUEST['authId'];
    
    
    // add comment to table 
    $sql = "INSERT INTO likes (post_id, user_id) 
    VALUES ('$post_id', '$author')";
    mysqli_query($conn, $sql);

    header("Location: landing.php");
            exit();

exit();

};

?>

<?php
 

    $sql = "SELECT * FROM `category`";
    $all_categories = mysqli_query($conn,$sql);
  
    // The following code checks if the submit button is clicked 
    // and inserts the data in the database accordingly
    if(isset($_POST['add-category']))
    {
        // Store the Product name in a "name" variable
        $name = mysqli_real_escape_string($conn,$_POST['categoryAdd']);
        
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($conn,$_POST['Category']); 
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert = 
        "INSERT INTO `category`(`Category_ID`, `Category_Name`)
            VALUES ('$id','$name')";
        
        mysqli_query($conn,$sql_insert);

        header("Location: create.php");
        exit();
    }
?>

<?php
 

    $sql = "SELECT * FROM `category`";
    $all_categories = mysqli_query($conn,$sql);
  

    if(isset($_POST['delete-category']))
    {
        $category = $_REQUEST['category'];


        $sql = "DELETE FROM category WHERE Category_ID = $category";
        $query = mysqli_query($conn, $sql);

        header("Location: create.php");
        exit();
    }

?>

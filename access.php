
<?php include("logic.php"); ?>
<?php
  session_start();


  if (!isset($_SESSION['loggedIn'])) {
      $_SESSION['loggedIn'] = false;
  }

  if (isset($_POST['password'])) {

    $submit_user = $_POST['password'];
    $submit_pass = $_POST['user'];
    $u_bool = false;
    $p_bool = false;
    
    $log_sql = "SELECT * FROM users";
    $log_query = mysqli_query($conn, $log_sql);
    
 

    foreach($log_query as $q) { 
      if (($_POST['user'] == $q['username']) && ($_POST['password'] == $q['userpassword'])) {
        
        $u_bool = true;

              $GLOBALS['a_user'] = $q['fullname'];
              $GLOBALS['a_avatar'] = $q['avatar'];
              
              $_SESSION['a_user'] = $q['fullname'];
              $_SESSION['a_avatar'] = $q['avatar'];
              $_SESSION['a_ID'] = $q['user_id'];
              $_SESSION['a_date'] = $q['r_date'];

              $a_username = $q['username'];
              $a_id = $q['user_id'];

            ?> 

            
<?php
              // $a_user_sql = "UPDATE `active_user` 
              //                SET `a_fullname`='$a_user',`a_avatar`='$a_avatar', `a_user`='$a_username' 
              //                WHERE 1";
              // mysqli_query($conn, $a_user_sql);      
        break;
      }
    };

      if ($u_bool) {
          $_SESSION['loggedIn'] = true;
      } else {
          header("Location: home.php?info=invalid");
          die ('Incorrect password');
      }
  } 

  if (!$_SESSION['loggedIn']):
?>
<?php include_once('head_section.php'); ?>
  <body>
     <div class="container-sm mt-5" style="max-width:500px;">
      <p>Password needed for access, please enter password now</p>
      <form class="form-inline row" method="post">

        <div class="">
          <div class="form-group">
              <label for="inputPassword">User</label>
              <input type="text" name="user" id="inputUser" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>  
          </div>
        </div>

        <div class="row">
          <div class="form-group col-sm-12 col-md-12">
            <input type="submit" name="submit" value="Login" class="mt-2 btn btn-primary">
            <div class="display-flex ">
            <a class="btn btn-dark mt-2" href="index.php">Home</a>
            <a class="btn btn-success mt-2 float-end " href="sign-up.php">Sign Up</a>
            </div>

          </div>
        </div>

      </form>
    </div>

   <script>

   </script>


  </body>
</html>

<?php
exit();
endif;
?>
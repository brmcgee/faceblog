
<?php include("logic.php"); ?>
<?php session_start(); ?>
<?php
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
    break;
    };
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
<title>Log In - Blog App</title>
</head>
<body>
<style>
  html,
  body {
    height: 100%;
  }

  body {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="b.ico" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputUser" class="sr-only">User Name</label>
      <input type="text" name="user" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block" >
      <a class="btn btn-lg btn-primary btn-block" href="index.php">Home</a>
      <a class="btn btn-lg btn-dark btn-block" href="sign-up.php">Sign Up</a>
    </form>
  </body>

     <!-- <div class="container-sm mt-5" style="max-width:500px;">
      <p>Password needed for access, please enter password now</p>
      <form class="form-inline row" method="post">

        <div class="">
          <div class="form-group">
              <label for="inputPassword">User</label>
              <input type="text" name="user" id="inputUser" class="form-control mx-sm-3">
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control mx-sm-3">
            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>  
          </div>
        </div>

        <div class="row">
          <div class="form-group col-sm-12 col-md-12">
            <input type="submit" name="submit" value="Login" class="mt-2 btn btn-primary">
            <div class="display-flex ">
            <a class="btn btn-dark" href="index.php">Home</a>
            <a class="btn btn-success" href="sign-up.php">Sign Up</a>
            </div>

          </div>
        </div>

      </form>
    </div> -->
  </body>
</html>

<?php
exit();
endif;
?>
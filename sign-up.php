
<?php include_once('head_section.php'); ?>
<?php include_once('logic.php'); ?>


  <body>
     <div class="container-sm mt-5" style="max-width:600px;">
     <div class="container">
      <h3>Sign up for an account</h3>
     </div>
      <form class="form-inline row" method="post">

        <div class="col-4">
          <div class="form-group">
              <label for="userid" hidden>User ID</label>
              <input type="text" hidden name="userid" id="userid" class="form-control mx-sm-3">
          </div>
        </div>

        <div class="mt-5">
          <div class="form-group">
              <label for="fullname">Display Name</label>
              <input type="text" name="fullname" id="fullname" class="form-control mx-sm-3">
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="text" name="avatar" id="avatar" placeholder="URL"class="form-control mx-sm-3"> 
          </div>
        </div>

        <div class="mt-5">
          <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control mx-sm-3">
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="text" name="userpassword" id="userpassword" class="form-control mx-sm-3">
            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>  
          </div>
        </div>

        <div class="row">
          <div class="form-group col-sm-12 col-md-6">
            <!-- <input type="submit" name="signup" value="Sign Up" class="mt-2 btn btn-primary"> -->
            <button name="signup" class="mt-2 btn btn-primary">Sign Up</button>
            <a class="btn btn-dark mt-2" href="index.php">Home</a>
          </div>
        </div>

      </form>
    </div>

    



  </body>
</html>


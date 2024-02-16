<?php

    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = "faceblog";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    

    $conn = new mysqli($servername, $username, $password, $dbname);

  // if($conn){
  //   echo "<h5 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
  //           Connection established</h3>";
  // }

?>

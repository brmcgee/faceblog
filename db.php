<?php

    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = "faceblog";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    // $servername = 'sql108.byetcluster.com';
    // $username = 'epiz_33444535';
    // $password = 'oCiusB9IgJL';
    // $dbname = "epiz_33444535_faceblog";
    // $conn = mysqli_connect($servername, $username, $password, $dbname);



    $conn = new mysqli($servername, $username, $password, $dbname);

  // if($conn){
  //   echo "<h5 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
  //           Connection established</h3>";
  // }

?>
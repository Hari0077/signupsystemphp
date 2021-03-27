<?php


  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "loginjunior";
   
  $conn=mysqli_connect($servername,$username,$password,"$dbname");


   
   $firstname = $_POST['fname'];
   $email = $_POST['email'];

   if($conn)
    echo "connected successfully!!";


    $sql = "INSERT INTO  signup(fullname,email)
    VALUES ('$firstname','$email')";
    if (mysqli_query($conn, $sql)) {
       echo "New record created successfully !";
    } else {
       echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);

   ?>

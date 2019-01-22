<?php
 include_once 'logindb.php';
      $username= mysqli_real_escape_string($conn, $_POST["username"]);
      $password= mysqli_real_escape_string($conn,$_POST["password"]);
      $email= mysqli_real_escape_string($conn, $_POST["email"]);
      $sql= "INSERT INTO users(username,password,user_email)
      Values('$username','$password','$email')";
      mysqli_query($conn,$sql);
        header("Location: ../index.php?signup=success");





     //  $resultCheck= mysqli_num_rows ($result);
     //
     //  if($resultCheck>0){
     //    while ($row= mysqli_fetch_assoc($result)) {
     //      echo $row['username']."<br>";
     //    }
     //  }
     //

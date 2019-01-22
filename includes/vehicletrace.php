<?php
  // include_once 'vehicledb.php';
  //
  // $licence= $_POST['postlicence'];
  // $sql='SELECT * FROM vehicle WHERE vehicle_licence='.'"'.$licence.'"'.'ORDER BY time ASC';
  // $result = mysqli_query($connection,$sql);
  // // echo $sql;
  // if (mysqli_num_rows($result)>0) {
  //   while($row=mysqli_fetch_assoc($result)){
  //     echo $row['location_lat'] . "x" . $row['location_lgn'];
  //   }
  // }else{
  //   echo "error";
  // }

  include_once 'vehicledb.php';

  $licence= $_POST['postlicence'];
  $sql='SELECT * FROM vehicle WHERE vehicle_licence='.'"'.$licence.'"'.'ORDER BY time ASC';
  $result = mysqli_query($connection,$sql);
  // echo $sql;
  if (mysqli_num_rows($result)>0) {
    echo mysqli_num_rows($result)."x";
    while($row=mysqli_fetch_assoc($result)){
      echo $row['location_lat'] . "x" . $row['location_lgn']."x";
    }
  }else{
    echo "error";
  }
?>

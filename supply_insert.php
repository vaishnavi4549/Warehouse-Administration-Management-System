
<?php
  
  include_once 'Connection.php';

  $SID = $_POST['ISupply_id'];
  $MID = $_POST['IMFR_id'];
  $PID = $_POST['IP_id'];

  $sql = "INSERT INTO supply ( SUPPLYID , MFRID, PRODUCTID) VALUES ('$SID' , '$MID' , '$PID');";

  if(mysqli_query($conn,$sql)){
      echo "Data Inserted successfully";
  }
?>

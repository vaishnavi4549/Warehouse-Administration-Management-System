<?php
    include_once'Connection.php';

    $id=$_POST['DP_id'];
    $sql = "DELETE FROM product WHERE PID='$id';";

    if(mysqli_query($conn,$sql)){
        echo"Deleted Record Successfully";
    }
?>
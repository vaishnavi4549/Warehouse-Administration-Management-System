<?php
    include_once'Connection.php';
    $ID = $_POST['DM_id'];

    $sql = "DELETE FROM manufacturer where MFR_ID= $ID;";

    if(mysqli_query($conn,$sql)){
        echo "Data Deleted Successfully";
    }
?>
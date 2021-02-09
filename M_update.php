<?php
    include_once'Connection.php';

    $ID= $_POST['UM_id'];
    $name = $_POST['UM_name'];
    $type = $_POST['UM_type'];

    $sql = "UPDATE manufacturer SET NAME='$name' , TYPE='$type' WHERE MFR_ID ='$ID';";
    
    if(mysqli_query($conn,$sql)){
        echo "Record Updated successfully";
    }
?>

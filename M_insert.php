
<?php
  
    include_once 'Connection.php';

    $ID = $_POST['IM_id'];
    $name = $_POST['IM_name'];
    $type = $_POST['IM_type'];

    $sql = "INSERT INTO manufacturer ( MFR_ID , NAME ,TYPE) VALUES ('$ID' , '$name' , '$type');";

    if(mysqli_query($conn,$sql)){
        echo "Data Inserted successfully";
    }
?>

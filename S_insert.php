<?php
    include_once'Connection.php';

    $slot=$_POST['ISlot'];
    $capacity=$_POST['ICapacity'];
    $availability=$_POST['IAvailability'];
   

    $sql="INSERT INTO storage(SLOTID,CAPACITY,AVAILABLITY) VALUES('$slot','$capacity','$availability');";

    if(mysqli_query($conn,$sql)){
        echo"Record Inserted Successfully !";
    }
?>
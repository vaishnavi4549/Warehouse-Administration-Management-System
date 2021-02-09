<?php
    include_once'Connection.php';

    $slot=$_POST['USlot'];
    $capacity=$_POST['UCapacity'];
    $availability=$_POST['UAvailability'];
   

    $sql="UPDATE storage SET CAPACITY='$capacity' , AVAILABLITY='$availability' WHERE SLOTID='$slot';";

    if(mysqli_query($conn,$sql)){
        echo"Record Updated Successfully !";
    }
?>
<?php
    include_once'Connection.php';
    $id=$_POST['UP_id'];
    $name=$_POST['UP_name'];
    $price=$_POST['UP_price'];
    $md=$_POST['UP_md'];
    $ed=$_POST['UP_ed'];
    $type=$_POST['UP_type'];
    $by=$_POST['UP_by'];

    $sql = "UPDATE product SET NAME ='$name',PRICE='$price',MD='$md',ED='$ed',TYPE='$type',PBY='$by' WHERE PID='$id';";

    if(mysqli_query($conn,$sql)){
        echo"Record Updated successfully !";
    }
?>

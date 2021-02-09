<?php
    include_once'Connection.php';

    $id=$_POST['IP_id'];
    $name=$_POST['IP_name'];
    $price=$_POST['IP_price'];
    $md=$_POST['IP_md'];
    $ed=$_POST['IP_ed'];
    $type=$_POST['IP_type'];
    $by=$_POST['IP_by'];

    $sql = "INSERT INTO product (PID,NAME,PRICE,MD,ED,TYPE,PBY) VALUES ('$id','$name','$price','$md','$ed','$type','$by');";

    if(mysqli_query($conn,$sql)){
        echo"Insertion successfull !";
    }
?>

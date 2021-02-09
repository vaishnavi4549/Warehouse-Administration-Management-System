<?php
    include_once'Connection.php';

    $id=$_POST['EMPID'];
    $name=$_POST['ENAME'];
    $pst=$_POST['EPOST'];
    $mobno=$_POST['ECON'];

    $sql="INSERT INTO worker(EMPID,NAME,POST,MOBNO) VALUES('$id','$name','$pst','$mobno');";

    if(mysqli_query($conn,$sql)){
        echo"Record Inserted Successfully !";
    }
?>
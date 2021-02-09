<?php
    include_once'Connection.php';

    $id=$_POST['U_ID'];
    $name=$_POST['U_NAME'];
    $pst=$_POST['U_POST'];
    $mobno=$_POST['U_ECON'];

    $sql="UPDATE worker SET NAME='$name',POST='$pst',MOBNO='$mobno' where EMPID='$id';";

    if(mysqli_query($conn,$sql)){
        echo"Record Updated Successfully !";
    }
?>
<?php
    include_once'Connection.php';

    $sql = "SELECT * FROM worker ";
    
    $result=mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<br>Employee ID:".$row['EMPID']."<br><br>"."Name:".$row['NAME']."<br><br>"."POST:".$row['POST']."<br><br>"."Contact No:".$row['MOBNO'];
            echo"<br>_________________________________________________________________________";
        }
    }

?>

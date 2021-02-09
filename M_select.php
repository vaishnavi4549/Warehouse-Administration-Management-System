<?php
    include_once'Connection.php';

    $sql = "SELECT * FROM manufacturer ";
    
    $result=mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<br>ID:".$row['MFR_ID']."<br><br>"."Name:".$row['NAME']."<br><br>"."Type:".$row['TYPE'];
	echo"<br>________________________________________________________________________";
        }
    }

?>

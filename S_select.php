<?php
    include_once'Connection.php';

    $sql = "SELECT * FROM storage ";
    
    $result=mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<BR>Slot ID:".$row['SLOTID']."<br><BR>"."Number of slots:".$row['CAPACITY']."<br><BR>"."Number of slota available:".$row['AVAILABLITY'];
            echo"<br>_____________________________________________________________";
        }
    }

?>
